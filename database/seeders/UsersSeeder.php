<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Seed data for the 'care_providers' table
         DB::table('users')->insert([
            'name' => 'munashe chapata',
            'email' => 'chaps@gmail.com',
            'password' => Hash::make('password456'), // Hash the password for security
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
