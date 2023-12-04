<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CareProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed data for the 'care_providers' table
        DB::table('care_providers')->insert([
            'company_name' => 'Care Provider 1',
            'company_email' => 'careprovider@example.com',
            'website_url' => 'http://careprovider.com',
            'manager_name' => 'Jane Doe',
            'manager_email' => 'jane.doe@example.com',
            'manager_contact' => '9876543210',
            'services_provided' => 'Service X, Service Y',
            'password' => Hash::make('password456'), // Hash the password for security
            'admin' => 'admin@careprovider.com',
            'approved_at' => now(), // Assuming the care provider is approved at the current time
            'email_verified_at' => now(), // Assuming the email is verified at the current time
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('care_providers')->insert([
            'company_name' => 'Care Provider 2',
            'company_email' => 'careprovider@example.com',
            'website_url' => 'http://careprovider.com',
            'manager_name' => 'Jane Doe',
            'manager_email' => 'jane.doe@example.com',
            'manager_contact' => '9876543210',
            'services_provided' => 'Service X, Service Y',
            'password' => Hash::make('password456'), // Hash the password for security
            'admin' => 'admin@careprovider.com',
            'approved_at' => now(), // Assuming the care provider is approved at the current time
            'email_verified_at' => now(), // Assuming the email is verified at the current time
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('care_providers')->insert([
            'company_name' => 'Care Provider 3',
            'company_email' => 'careprovider@example.com',
            'website_url' => 'http://careprovider.com',
            'manager_name' => 'Jane Doe',
            'manager_email' => 'jane.doe@example.com',
            'manager_contact' => '9876543210',
            'services_provided' => 'Service X, Service Y',
            'password' => Hash::make('password456'), // Hash the password for security
            'admin' => 'admin@careprovider.com',
            'approved_at' => now(), // Assuming the care provider is approved at the current time
            'email_verified_at' => now(), // Assuming the email is verified at the current time
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('care_providers')->insert([
            'company_name' => 'Care Provider 4',
            'company_email' => 'careprovider@example.com',
            'website_url' => 'http://careprovider.com',
            'manager_name' => 'Jane Doe',
            'manager_email' => 'jane.doe@example.com',
            'manager_contact' => '9876543210',
            'services_provided' => 'Service X, Service Y',
            'password' => Hash::make('password456'), // Hash the password for security
            'admin' => 'admin@careprovider.com',
            'approved_at' => now(), // Assuming the care provider is approved at the current time
            'email_verified_at' => now(), // Assuming the email is verified at the current time
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
