<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Superadmin',
               'email'=>'superadmin@example.com',
               'role_id'=>'1',
               'password'=> bcrypt('1234'),
               'domain'=> 'prefectpro.test',
               'code' => null,
               'user_information' => '{"birthday":1691690400,"gender":"Male","phone":"123456","address":"Address","photo":"user.png"}',
            ]
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
