<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            [
                'name' => 'english', 'phrase' => 'Enter your email address to reset your password.',
                'translated' => 'Enter your email address to reset your password.'
            ],
            [
                'name' => 'english', 'phrase' => 'Reset password',
                'translated' => 'Reset password'
            ],
            [
                'name' => 'english', 'phrase' => 'Back',
                'translated' => 'Back'
            ],
            [
                'name' => 'english', 'phrase' => 'Login',
                'translated' => 'Login'
            ],
            [
                'name' => 'english', 'phrase' => 'Email',
                'translated' => 'Email'
            ],
            [
                'name' => 'english', 'phrase' => 'Password',
                'translated' => 'Password'
            ],
            [
                'name' => 'english', 'phrase' => 'Forgot password',
                'translated' => 'Forgot password'
            ],
            [
                'name' => 'english', 'phrase' => 'Dashboard',
                'translated' => 'Dashboard'
            ],
            [
                'name' => 'english', 'phrase' => 'Home',
                'translated' => 'Home'
            ],
            [
                'name' => 'english', 'phrase' => 'Schools',
                'translated' => 'Schools'
            ],
            [
                'name' => 'english', 'phrase' => 'Total Schools',
                'translated' => 'Total Schools'
            ],
            [
                'name' => 'english', 'phrase' => 'Subscription',
                'translated' => 'Subscription'
            ],
            [
                'name' => 'english', 'phrase' => 'Total Active Subscription',
                'translated' => 'Total Active Subscription'
            ],
            [
                'name' => 'english', 'phrase' => 'Subscription Payment',
                'translated' => 'Subscription Payment'
            ],
            [
                'name' => 'english', 'phrase' => 'Superadmin',
                'translated' => 'Superadmin'
            ],
            [
                'name' => 'english', 'phrase' => 'Create school',
                'translated' => 'Create school'
            ],
            [
                'name' => 'english', 'phrase' => 'Subcription',
                'translated' => 'Subcription'
            ],
            [
                'name' => 'english', 'phrase' => 'Subscription Report',
                'translated' => 'Subscription Report'
            ],
            [
                'name' => 'english', 'phrase' => 'Expired Subscription',
                'translated' => 'Expired Subscription'
            ],
            [
                'name' => 'english', 'phrase' => 'Pending Request',
                'translated' => 'Pending Request'
            ],
            [
                'name' => 'english', 'phrase' => 'Package',
                'translated' => 'Package'
            ],
            [
                'name' => 'english', 'phrase' => 'Addons',
                'translated' => 'Addons'
            ],
            [
                'name' => 'english', 'phrase' => 'Settings',
                'translated' => 'Settings'
            ],
            [
                'name' => 'english', 'phrase' => 'System Settings',
                'translated' => 'System Settings'
            ],
            [
                'name' => 'english', 'phrase' => 'Website Settings',
                'translated' => 'Website Settings'
            ],
            [
                'name' => 'english', 'phrase' => 'Manage Faq',
                'translated' => 'Manage Faq'
            ],
            [
                'name' => 'english', 'phrase' => 'Payment Settings',
                'translated' => 'Payment Settings'
            ],
            [
                'name' => 'english', 'phrase' => 'Language Settings',
                'translated' => 'Language Settings'
            ],
            [
                'name' => 'english', 'phrase' => 'Smtp settings',
                'translated' => 'Smtp settings'
            ],
            [
                'name' => 'english', 'phrase' => 'About',
                'translated' => 'About'
            ],
            [
                'name' => 'english', 'phrase' => 'Visit Website',
                'translated' => 'Visit Website'
            ],
            [
                'name' => 'english', 'phrase' => 'My Account',
                'translated' => 'My Account'
            ],
            [
                'name' => 'english', 'phrase' => 'Change Password',
                'translated' => 'Change Password'
            ],
            [
                'name' => 'english', 'phrase' => 'Log out',
                'translated' => 'Log out'
            ],
            [
                'name' => 'english', 'phrase' => 'Loading...',
                'translated' => 'Loading...'
            ],
            [
                'name' => 'english', 'phrase' => 'Heads up!',
                'translated' => 'Heads up!'
            ],
            [
                'name' => 'english', 'phrase' => 'Are you sure?',
                'translated' => 'Are you sure?'
            ],
            [
                'name' => 'english', 'phrase' => 'Continue',
                'translated' => 'Continue'
            ],
            [
                'name' => 'english', 'phrase' => 'You won\'t able to revert this!',
                'translated' => 'You won\'t able to revert this!'
            ],
            [
                'name' => 'english', 'phrase' => 'Yes',
                'translated' => 'Yes'
            ],
            [
                'name' => 'english', 'phrase' => 'Cancel',
                'translated' => 'Cancel'
            ],
            [
                'name' => 'english', 'phrase' => 'Close',
                'translated' => 'Close'
            ],
            [
                'name' => 'english', 'phrase' => 'SCHOOL INFO',
                'translated' => 'SCHOOL INFO'
            ],
            [
                'name' => 'english', 'phrase' => 'School Name',
                'translated' => 'School Name'
            ],
            [
                'name' => 'english', 'phrase' => 'School Address',
                'translated' => 'School Address'
            ],
            [
                'name' => 'english', 'phrase' => 'School Email',
                'translated' => 'School Email'
            ],
            [
                'name' => 'english', 'phrase' => 'School Phone',
                'translated' => 'School Phone'
            ],
            [
                'name' => 'english', 'phrase' => 'ADMIN INFO',
                'translated' => 'ADMIN INFO'
            ],
            [
                'name' => 'english', 'phrase' => 'Admin Name',
                'translated' => 'Admin Name'
            ],
            [
                'name' => 'english', 'phrase' => 'Gender',
                'translated' => 'Gender'
            ],
            [
                'name' => 'english', 'phrase' => 'Select a gender',
                'translated' => 'Select a gender'
            ],
            [
                'name' => 'english', 'phrase' => 'Male',
                'translated' => 'Male'
            ],
            [
                'name' => 'english', 'phrase' => 'Female',
                'translated' => 'Female'
            ],
            [
                'name' => 'english', 'phrase' => 'Blood group',
                'translated' => 'Blood group'
            ],
            [
                'name' => 'english', 'phrase' => 'Select a blood group',
                'translated' => 'Select a blood group'
            ],
            [
                'name' => 'english', 'phrase' => 'A+',
                'translated' => 'A+'
            ],
            [
                'name' => 'english', 'phrase' => 'A-',
                'translated' => 'A-'
            ],
            [
                'name' => 'english', 'phrase' => 'B+',
                'translated' => 'B+'
            ],
            [
                'name' => 'english', 'phrase' => 'B-',
                'translated' => 'B-'
            ],
            [
                'name' => 'english', 'phrase' => 'AB+',
                'translated' => 'AB+'
            ],
            [
                'name' => 'english', 'phrase' => 'AB-',
                'translated' => 'AB-'
            ],
            [
                'name' => 'english', 'phrase' => 'O+',
                'translated' => 'O+'
            ],
            [
                'name' => 'english', 'phrase' => 'O-',
                'translated' => 'O-'
            ],
            [
                'name' => 'english', 'phrase' => 'Admin Address',
                'translated' => 'Admin Address'
            ],
            [
                'name' => 'english', 'phrase' => 'Admin Phone Number',
                'translated' => 'Admin Phone Number'
            ],
            [
                'name' => 'english', 'phrase' => 'Photo',
                'translated' => 'Photo'
            ],
            [
                'name' => 'english', 'phrase' => 'Admin Email',
                'translated' => 'Admin Email'
            ],
            [
                'name' => 'english', 'phrase' => 'Admin Password',
                'translated' => 'Admin Password'
            ],
            [
                'name' => 'english', 'phrase' => 'School Domain',
                'translated' => 'School Domain'
            ]
        ];

        foreach ($languages as $key => $value) {
            Language::create($value);
        };
    }

}
