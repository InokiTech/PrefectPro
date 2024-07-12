<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CommonController;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Session;
use App\Models\School;
use App\Models\Subscription;
use App\Models\Exam;
use App\Models\ExamCategory;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Gradebook;
use App\Models\Grade;
use App\Models\Department;
use App\Models\ClassRoom;
use App\Models\ClassList;
use App\Models\Section;
use App\Models\Enrollment;
use App\Models\DailyAttendances;
use App\Models\Routine;
use App\Models\Syllabus;
use App\Models\ExpenseCategory;
use App\Models\Expense;
use App\Models\StudentFeeManager;
use App\Models\Book;
use App\Models\BookIssue;
use App\Models\Noticeboard;
use App\Models\FrontendEvent;
use App\Models\Package;
use App\Models\PaymentMethods;
use App\Models\Currency;
use App\Models\PaymentHistory;
use App\Models\TeacherPermission;
use App\Models\Payments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class SchoolPaystackController extends Controller
{
    private $user;
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth()->user();
            return $next($request);
        });
    }


    public function initializePaystack(Request $request, $invoice_id)
    {

        $invoice = StudentFeeManager::find($invoice_id);

        $amount = $invoice->total_amount * 100;
        $email = $this->user->email;
        $user_id = $this->user->id;

        $school_id = $this->user->school_id;

        $payment_method = PaymentMethods::where('school_id', $school_id)->first();

        $key = $payment_method->payment_keys;

        $keyArray = json_decode($key, true);


        if ($payment_method->mode == "test") {
            $secret_key = $keyArray['test_secret_key'];
            $public_key = $keyArray['test_key'];
        } elseif ($keyArray['mode'] == "live") {
            $secret_key = $keyArray['secret_live_key'];
            $public_key = $keyArray['public_live_key'];
        }

        // return ($secret_key);

        // return ($amount);

        // $callbackUrl = env('APP_URL').'student/paystack/callback'; // Replace with your actual callback URL

        $callbackUrl = route('student.paystack.authorize'); // Replace with your actual callback URL

        $url = 'https://api.paystack.co/transaction/initialize';
        $headers = [
            "Authorization: Bearer $secret_key",
            'Content-Type: application/json',
        ];
        $data = [
            'email' => $email,
            'amount' => $amount,
            'callback_url' => $callbackUrl,
            'metadata' => [
                'invoice_id' => $invoice_id,
                'invoice_name' => $invoice->title,
                'student_id' => $user_id,
                'school_id' => $school_id,
            ],

            // other payment parameters
        ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        // Process the response and redirect user to Paystack payment page
        $responseData = json_decode($response);

        // return $response;

        return redirect($responseData->data->authorization_url);
    }



    public function authorizePaystack(Request $request)
    {
        $reference = $request->query('reference'); // Get the transaction reference from the query string

        // Verify the transaction status with Paystack
        $verificationResponse = $this->verifyTransaction($reference);

        // $reference = $verificationResponse->data->reference;

        if ($verificationResponse->status === true) {

            $data = $verificationResponse->data->metadata;
            $invoice_id = $verificationResponse->data->metadata->invoice_id;


            $invoice = StudentFeeManager::find($invoice_id);

            $invoice['payment_method'] = 'paystack';
            $invoice['paid_amount'] = $verificationResponse->data->amount/100;
            $invoice['status'] = 'paid';
            $invoice['info'] = json_encode($data);

            $updated_invoice = $invoice->save();


            if ($updated_invoice) {
                return redirect()->route('student.dashboard')
                ->with('message', 'Payment successful.');
            }
            

        } else {

            return redirect()->route('admin.dashboard')
                ->with('error', 'Payment failed.');
        }
    }

    private function verifyTransaction($reference)
    {

        $school_id = $this->user->school_id;

        $payment_method = PaymentMethods::where('school_id', $school_id)->first();

        $key = $payment_method->payment_keys;

        $keyArray = json_decode($key, true);


        if ($payment_method->mode == "test") {
            $secret_key = $keyArray['test_secret_key'];
            $public_key = $keyArray['test_key'];
        } elseif ($keyArray['mode'] == "live") {
            $secret_key = $keyArray['secret_live_key'];
            $public_key = $keyArray['public_live_key'];
        }


        $url = 'https://api.paystack.co/transaction/verify/' . $reference;

        $headers = [
            "Authorization: Bearer $secret_key",
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);
    }

}
