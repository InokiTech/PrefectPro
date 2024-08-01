<?php

namespace Database\Seeders;

use App\Models\GlobalSettings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'system_name',
                'value' => 'Prefect Pro'
            ],
            [
                'key' => 'system_title',
                'value' => 'Prefect Pro'
            ],
            [
                'key' => 'system_email',
                'value' => 'talktous@prefectpro.com'
            ],
            [
                'key' => 'phone',
                'value' => '+234'
            ],
            [
                'key' => 'address',
                'value' => '2..'
            ],
            [
                'key' => 'purchase_code',
                'value' => 'xxxxxxxxxxxxx'
            ],
            [
                'key' => 'system_currency',
                'value' => 'NGN'
            ],
            [
                'key' => 'currency_position',
                'value' => 'left'
            ],
            [
                'key' => 'running_session',
                'value' => '1'
            ],
            [
                'key' => 'language',
                'value' => 'english'
            ],
            [
                'key' => 'payment_settings',
                'value' => '[]'
            ],
            [
                'key' => 'footer_text',
                'value' => 'Designed and Managed by Inoki Tech'
            ],
            [
                'key' => 'footer_link',
                'value' => 'https://prefectpro.inoki.tech/'
            ],
            [
                'key' => 'version',
                'value' => '1.6.1'
            ],
            [
                'key' => 'fax',
                'value' => '+234'
            ],
            [
                'key' => 'timezone',
                'value' => 'Africa/Lagos'
            ],
            [
                'key' => 'smtp_protocol',
                'value' => 'smtp'
            ],
            [
                'key' => 'smtp_crypto',
                'value' => 'tls'
            ],
            [
                'key' => 'smtp_host',
                'value' => 'server.walexbizserver.com'
            ],
            [
                'key' => 'smtp_port',
                'value' => '465'
            ],
            [
                'key' => 'smtp_user',
                'value' => 'info@walexacademits.com'
            ],
            [
                'key' => 'smtp_pass',
                'value' => 'JEnB_FnKPRet'
            ],
            [
                'key' => 'offline',
                'value' => '{"status":"1"}'
            ],
            [
                'key' => 'light_logo',
                'value' => '17007296732.png'
            ],
            [
                'key' => 'dark_logo',
                'value' => '17007296731.png'
            ],
            [
                'key' => 'favicon',
                'value' => '17007296733.png'
            ],
            [
                'key' => 'randCallRange',
                'value' => '30'
            ],
            [
                'key' => 'help_link',
                'value' => 'https://prefectpro.inoki.tech/'
            ],
            [
                'key' => 'youtube_api_key',
                'value' => 'youtube-api-key'
            ],
            [
                'key' => 'vimeo_api_key',
                'value' => 'vimeo-api-key'
            ],
            [
                'key' => 'banner_title',
                'value' => 'Democratising Quality Education'
            ],
            [
                'key' => 'banner_subtitle',
                'value' => 'Empowering and inspiring all students to excel as life long learners'
            ],
            [
                'key' => 'facebook_link',
                'value' => 'https://www.facebook.com/PrefectPro'
            ],
            [
                'key' => 'twitter_link',
                'value' => 'https://twitter.com/PrefectPro'
            ],
            [
                'key' => 'linkedin_link',
                'value' => 'https://www.linkedin.com/company/PrefectPro'
            ],
            [
                'key' => 'instagram_link',
                'value' => 'http://www.instagram.com/PrefectPro'
            ],
            [
                'key' => 'price_subtitle',
                'value' => 'Choose the best subscription plan for your school'
            ],
            [
                'key' => 'copyright_text',
                'value' => '2024 Designed and Managed by Inoki Tech Ltd. All rights reserved'
            ],
            [
                'key' => 'contact_email',
                'value' => 'talktous@PrefectPro.com'
            ],
            [
                'key' => 'frontend_footer_text',
                'value' => 'PrefectPro is cutting-edge School Management Software for streamlining administrative tasks, enhancing communication, and fostering a seamless educational experience.'
            ],
            [
                'key' => 'faq_subtitle',
                'value' => 'Frequently asked questions'
            ],
            [
                'key' => 'frontend_view',
                'value' => '1'
            ],
            [
                'key' => 'white_logo',
                'value' => '17007296734.png'
            ],
            [
                'key' => 'navbar_title',
                'value' => 'Prefect Pro'
            ],
            [
                'key' => 'paystack',
                'value' => '{"status":"1","mode":"live","test_key":"pk_test_4c2edac2191a9a5e2d4ef97b5b32a4ee5e84aa68","test_secret_key":"sk_test_4fcfe44d34637a058300ad4dd0ed33c97a4c72eb","public_live_key":"pk_live_9359e2849ed1664c11b9beb7cbd4d614182652a0","secret_live_key":"sk_live_fc106ba6ffe79baa317f1acbe25fec54902876f5"}'
            ]
        ];

        foreach ($settings as $key => $value) {
            GlobalSettings::create($value);
        }
        
    }
}
