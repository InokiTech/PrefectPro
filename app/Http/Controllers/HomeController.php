<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
use App\Models\Session;
use App\Models\School;
use App\Models\Faq;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        if (get_settings('frontend_view') == '1') {

            $trial_package = Package::where('price', 0)->first();

            $standard_packages = Package::where('status', 1)->where('grouped', 's')->where('price', '!=', 0)->get();
            $advance_packages = Package::where('status', 1)->where('grouped', 'a')->get();
            $premium_packages = Package::where('status', 1)->where('grouped', 'p')->get();

            $packages = Package::where('status', 1)->get();
            $faqs = Faq::all();
            $users = User::all();
            $schools = School::all();
            return view(
                'frontend.landing_page',
                [
                    'packages' => $packages,
                    'faqs' => $faqs,
                    'users' => $users,
                    'schools' => $schools,

                    'standard_packages' => $standard_packages,
                    'advance_packages' => $advance_packages,
                    'premium_packages' => $premium_packages,
                    'trial_package' => $trial_package
                ]
            );
        } else {
            return redirect(route('login'));
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function superadminHome()
    {
        return view('superadminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }


    // public function schoolCreate(Request $request)
    // {
    //     $data = $request->all();

    //     $school = School::create([
    //         'title' => $data['school_name'],
    //         'email' => $data['school_email'],
    //         'phone' => $data['school_phone'],
    //         'address' => $data['school_address'],
    //         'school_info' => $data['school_info'],
    //         'status' => '2',
    //     ]);

    //     if (isset($school->id) && $school->id != "") {

    //         $data['status'] = '1';
    //         $data['session_title'] = date("Y");
    //         $data['school_id'] = $school->id;

    //         $session = Session::create($data);

    //         School::where('id', $school->id)->update([
    //             'running_session' => $session->id,
    //         ]);

    //         if (!empty($data['photo'])) {

    //             $imageName = time() . '.' . $data['photo']->extension();

    //             $data['photo']->move(public_path('assets/uploads/user-images/'), $imageName);

    //             $photo  = $imageName;
    //         } else {
    //             $photo = '';
    //         }
    //         $info = array(
    //             'gender' => $data['gender'],
    //             // 'blood_group' => $data['blood_group'],
    //             'birthday' => isset($data['birthday']) ? strtotime($data['birthday']) : "",
    //             'phone' => $data['admin_phone'],
    //             'address' => $data['admin_address'],
    //             'photo' => $photo
    //         );
    //         $data['user_information'] = json_encode($info);
    //         User::create([
    //             'name' => $data['admin_name'],
    //             'email' => $data['admin_email'],
    //             'password' => Hash::make($data['admin_password']),
    //             'role_id' => '2',
    //             'school_id' => $school->id,
    //             'user_information' => $data['user_information'],
    //             'status' => 1,
    //         ]);

    //         $tenant = Tenant::create(['id' => $data['school_domain']]);
    //         $tenant->domains()->create(['domain' => $data['school_domain']]);

    //         tenancy()->initialize($tenant); // Adjust this based on your tenancy package

    //         $school = School::create([
    //             'title' => $data['school_name'],
    //             'email' => $data['school_email'],
    //             'phone' => $data['school_phone'],
    //             'address' => $data['school_address'],
    //             'school_info' => $data['school_info'],
    //             'status' => '2',
    //         ]);

    //         $data['status'] = '1';
    //         $data['session_title'] = date("Y");
    //         $data['school_id'] = $school->id;

    //         $session = Session::create($data);

    //         School::where('id', $school->id)->update([
    //             'running_session' => $session->id,
    //         ]);

    //         if (!empty($data['photo'])) {

    //             $imageName = time() . '.' . $data['photo']->extension();

    //             $data['photo']->move(public_path('assets/uploads/user-images/'), $imageName);

    //             $photo  = $imageName;
    //         } else {
    //             $photo = '';
    //         }
    //         $info = array(
    //             'gender' => $data['gender'],
    //             // 'blood_group' => $data['blood_group'],
    //             'birthday' => isset($data['birthday']) ? strtotime($data['birthday']) : "",
    //             'phone' => $data['admin_phone'],
    //             'address' => $data['admin_address'],
    //             'photo' => $photo
    //         );
    //         $data['user_information'] = json_encode($info);
    //         User::create([
    //             'name' => $data['admin_name'],
    //             'email' => $data['admin_email'],
    //             'password' => Hash::make($data['admin_password']),
    //             'role_id' => '2',
    //             'school_id' => $school->id,
    //             'user_information' => $data['user_information'],
    //             'status' => 1,
    //         ]);

    //         tenancy()->end();
    //     }


    //     return redirect()->route('login')->with('message', 'School Created Successfully');
    // }

    public function schoolCreate(Request $request)
    {
        // Check honeypot field
        if (!empty($request->input('honeypot'))) {
            return redirect()->back()->withErrors(['error' => 'Bot detected']);
        }

        // Validate the request data
        $validatedData = $request->validate([
            'school_name' => 'required|string|max:255',
            'school_email' => 'required|email|max:255',
            'school_phone' => 'required|string|max:20',
            'school_address' => 'required|string|max:255',
            'school_info' => 'nullable|string',
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|email|max:255',
            'admin_phone' => 'required|string|max:20',
            'admin_address' => 'required|string|max:255',
            'admin_password' => 'required|string|min:8',
            'gender' => 'required|string|in:male,female,other',
            'birthday' => 'nullable|date',
            'photo' => 'nullable|image|max:2048',
            'school_domain' => 'required|string|max:255|unique:tenants,id',
        ]);

        // dd($validatedData);

        DB::beginTransaction();
        try {
            // Create school in the main database
            $school = School::create([
                'title' => $validatedData['school_name'],
                'email' => $validatedData['school_email'],
                'phone' => $validatedData['school_phone'],
                'address' => $validatedData['school_address'],
                'school_info' => $validatedData['school_info'] ?? '',
                'status' => '2',
            ]);

            // Create session in the main database
            $session = Session::create([
                'status' => '1',
                'session_title' => date("Y"),
                'school_id' => $school->id,
            ]);

            // Update running session for the school in the main database
            $school->update([
                'running_session' => $session->id,
            ]);

            // Handle photo upload
            $photo = '';
            if (!empty($validatedData['photo'])) {
                $imageName = time() . '.' . $validatedData['photo']->extension();
                $validatedData['photo']->move(public_path('assets/uploads/user-images/'), $imageName);
                $photo = $imageName;
            }

            // Create admin user in the main database
            $adminInfo = [
                'gender' => $validatedData['gender'],
                'birthday' => isset($validatedData['birthday']) ? strtotime($validatedData['birthday']) : null,
                'phone' => $validatedData['admin_phone'],
                'address' => $validatedData['admin_address'],
                'photo' => $photo,
            ];

            User::create([
                'name' => $validatedData['admin_name'],
                'email' => $validatedData['admin_email'],
                'password' => Hash::make($validatedData['admin_password']),
                'role_id' => '2',
                'school_id' => $school->id,
                'user_information' => json_encode($adminInfo),
                'status' => 1,
                'domain' => $validatedData['school_domain'],
            ]);

            // Create tenant and domain in the main database
            $tenant = Tenant::create(['id' => $validatedData['school_domain']]);
            $tenant->domains()->create(['domain' => $validatedData['school_domain']]);

            tenancy()->initialize($tenant);

            // Replicate school data in the tenant database
            School::create([
                'id' => $school->id, // Ensure the ID matches the main database
                'title' => $validatedData['school_name'],
                'email' => $validatedData['school_email'],
                'phone' => $validatedData['school_phone'],
                'address' => $validatedData['school_address'],
                'school_info' => $validatedData['school_info'] ?? '',
                'status' => '2',
            ]);

            // Replicate session data in the tenant database
            $tenantSession = Session::create([
                'id' => $session->id, // Ensure the ID matches the main database
                'status' => '1',
                'session_title' => date("Y"),
                'school_id' => $school->id,
            ]);

            // Update running session for the school in the tenant database
            School::where('id', $school->id)->update([
                'running_session' => $tenantSession->id,
            ]);

            // Replicate admin user in the tenant database
            User::create([
                'name' => $validatedData['admin_name'],
                'email' => $validatedData['admin_email'],
                'password' => Hash::make($validatedData['admin_password']),
                'role_id' => '2',
                'school_id' => $school->id,
                'user_information' => json_encode($adminInfo),
                'status' => 1,
            ]);

            DB::commit();
            tenancy()->end();

            return redirect()->route('homepage')->with('message', 'School Created Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
            // return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
