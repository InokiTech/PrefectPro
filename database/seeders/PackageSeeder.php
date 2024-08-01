<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packages = [
            [
                'id' => '1',
                'name' => 'Free Package',
                'price' => '0.00',
                'package_type' => 'trial',
                'interval' => 'Days',
                'days' => '14',
                'status' => '1',
                'description' => 'Trial Package',
                'created_at' => '2024-07-31 06:08:08',
                'updated_at' => '2024-07-31 06:08:08'
            ],
            [
                'id' => '2',
                'name' => 'Student Package',
                'price' => '1000.00',
                'package_type' => 'paid',
                'interval' => 'Monthly',
                'days' => '4',
                'status' => '1',
                'description' => 'Student Subscription per term',
                'created_at' => '2024-07-31 06:08:52',
                'updated_at' => '2024-07-31 06:09:12'
            ]
        ];

        foreach ($packages as $key => $value) {
            Package::create($value);
        }
    }
}
