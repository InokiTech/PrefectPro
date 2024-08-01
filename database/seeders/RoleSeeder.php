<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_id' => '1',
                'name' => 'superadmin',
                'created_at' => '2022-05-17 08:14:27',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '2',
                'name' => 'admin',
                'created_at' => '2022-05-17 08:14:27',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '3',
                'name' => 'teacher',
                'created_at' => '2022-05-17 08:15:14',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '4',
                'name' => 'accountant',
                'created_at' => '2022-05-17 08:15:14',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '5',
                'name' => 'librarian',
                'created_at' => '2022-05-17 08:15:14',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '6',
                'name' => 'parent',
                'created_at' => '2022-05-17 08:15:14',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '7',
                'name' => 'student',
                'created_at' => '2022-05-17 08:15:14',
                'updated_at' => '2022-05-17 08:14:27'
            ],
            [
                'role_id' => '8',
                'name' => 'user',
                'created_at' => '2023-06-15 07:29:10',
                'updated_at' => '2023-06-15 07:29:10'
            ],
            [
                'role_id' => '9',
                'name' => 'alumni',
                'created_at' => '2023-06-15 07:29:10',
                'updated_at' => '2023-06-15 07:29:10'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
