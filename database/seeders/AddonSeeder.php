<?php

namespace Database\Seeders;

use App\Models\Addon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addons =
            [
                [
                    'id' => 1,
                    'title' => 'payment_gateways',
                    'parent_id' => 1,
                    'features' => "paypal\nstripe\nrazorpay\npaytm\npaystack",
                    'version' => 1,
                    'purchase_code' => 1,
                    'unique_identifier' => 1,
                    'status' => 1
                ]
            ];

            foreach ($addons as $key => $value) {
                Addon::create($value);
            }
    }
}
