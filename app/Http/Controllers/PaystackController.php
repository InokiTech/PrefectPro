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

class PaystackController extends Controller
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


    public function initializePaystack(Request $request, $package_id)
    {

        $package = Package::find($package_id);

        $amount = $package->price * 100;
        $email = $this->user->email;
        $user_id = $this->user->id;

        $key = get_settings('paystack');

        $keyArray = json_decode($key, true);

        // return $keyArray['mode'];

        if ($keyArray['mode'] == "test") {
            $secret_key = $keyArray['test_secret_key'];
            $public_key = $keyArray['test_key'];
        } elseif ($keyArray['mode'] == "live") {
            $secret_key = $keyArray['secret_live_key'];
            $public_key = $keyArray['public_live_key'];
        }

        // return ($secret_key);

        $callbackUrl = env('APP_URL').'admin/subscription/paystack/callback'; // Replace with your actual callback URL

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
                'package_id' => $package_id,
                'package_name' => $package->name,
                'customer_name' => $user_id,
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

        return redirect($responseData->data->authorization_url);
    }

    

    public function authorizePaystack(Request $request)
    {
        $reference = $request->query('reference'); // Get the transaction reference from the query string

        // Verify the transaction status with Paystack
        $verificationResponse = $this->verifyTransaction($reference);

        // $reference = $verificationResponse->data->reference;

        if ($verificationResponse->status === true) {

            $status = 'approve';

            $payment = new PaymentHistory;

            $payment['payment_type'] = 'subscription';
            $payment['user_id'] = auth()->user()->id;
            $payment['package_id'] = $verificationResponse->data->metadata->package_id;
            $payment['amount'] = $verificationResponse->data->amount/100;
            $payment['school_id'] = auth()->user()->school_id;
            $payment['transaction_keys'] = $reference;
            $payment['paid_by'] = 'Paystack';
            $payment['status'] = $status;
            $payment['timestamp'] = strtotime(date("Y-m-d H:i:s"));

            $paymentSaved = $payment->save();

            if ($paymentSaved) {
                $Subscribed = $this->subscriptionPaymentStatus($status, $reference);

                if ($Subscribed) {
                    return redirect()->route('admin.dashboard')
                    ->with('message', 'Payment successful.');
                }
            }

        } else {

            $payment = new PaymentHistory;

            $payment['payment_type'] = 'subscription';
            $payment['user_id'] = auth()->user()->id;
            $payment['package_id'] = $verificationResponse->data->metadata->package_id;
            $payment['amount'] = $verificationResponse->data->amount/100;
            $payment['school_id'] = auth()->user()->school_id;
            $payment['transaction_keys'] = $reference;
            $payment['paid_by'] = 'Paystack';
            $payment['status'] = 'Failed';
            $payment['timestamp'] = strtotime(date("Y-m-d H:i:s"));

            $paymentSaved = $payment->save();

            return redirect()->route('admin.dashboard')
                ->with('error', 'Payment failed.');
        }
    }

    private function verifyTransaction($reference)
    {
        $key = get_settings('paystack');

        $keyArray = json_decode($key, true);

        // return $keyArray['mode'];

        if ($keyArray['mode'] == "test") {
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

    private function subscriptionPaymentStatus($status, $reference)
    {
        if ($status == 'approve') {

            $payment_history = PaymentHistory::where('transaction_keys', $reference)->first();

            // $payment_history = PaymentHistory::find($id);
            $package = Package::find($payment_history->package_id);


            if(strtolower($package->interval)=='days')
            {
               $expire_date = strtotime('+'.$package->days.' days', strtotime(date("Y-m-d H:i:s")) );

            }
             elseif(strtolower($package->interval)=='monthly')
            {
                $monthly=$package->days*30;

            $expire_date = strtotime('+'.$monthly.' days', strtotime(date("Y-m-d H:i:s")) );

            }
             elseif(strtolower($package->interval)=='yearly')
            {
                $yearly=$package->days*365;
             $expire_date = strtotime('+'.$yearly.' days', strtotime(date("Y-m-d H:i:s")) );

            }

            $last_package = Subscription::where('school_id', $payment_history->school_id)->orderBy('id', 'desc')->first();


            Subscription::create([
                'package_id' => $payment_history->package_id,
                'school_id' => $payment_history->school_id,
                'paid_amount' => $payment_history->amount,
                'payment_method' => ucwords($payment_history->paid_by),
                'transaction_keys' => $reference,
                'expire_date' => $expire_date,
                'date_added' => strtotime(date('Y-m-d')),
                'active' => '1',
                'status' => '1',
            ]);

            if (!empty($last_package)) {
                $last_package = $last_package->toArray();

                Subscription::where('id',  $last_package['id'])->update([
                    'active' => 0,
                ]);
            }

            // $school = School::find($id);
            School::where('id', $payment_history->school_id)->update([
                'status' => 1,
            ]);
        }

        return true;
    }
}
