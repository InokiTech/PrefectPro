<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(TenantSeeder::class);

        // $this->call(CreateUsersSeeder::class);
        $this->call(GeneralSettingsSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(AddonSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
