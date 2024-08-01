<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant1 = Tenant::create(['id' => 'foo']);
        $tenant1->domains()->create(['domain' => 'foo.prefectpro.test']);

        $tenant2 = Tenant::create(['id' => 'bar']);
        $tenant2->domains()->create(['domain' => 'bar.prefectpro.test']);

        $this->call(CreateUsersSeeder::class);

        // Call the UserSeeder for each tenant
        $this->seedUsersForTenant($tenant1);
        $this->seedUsersForTenant($tenant2);
    }

    protected function seedUsersForTenant(Tenant $tenant)
    {
        tenancy()->initialize($tenant); // Adjust this based on your tenancy package

        User::create([
            'name' => 'User for ' . $tenant->id,
            'email' => $tenant->id . '@example.com',
            'password' => bcrypt('password'), // Change this to a secure password
            'code' => null,
            'user_information' => '{"birthday":1691690400,"gender":"Male","phone":"123456","address":"Address","photo":"user.png"}',
            'status' => 1,
        ]);

        $this->call(GeneralSettingsSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(AddonSeeder::class);


        tenancy()->end(); // Adjust this based on your tenancy package
    }
}
