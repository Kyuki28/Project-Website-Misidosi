<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User; // Make sure to import the User model

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate the users table to start from a clean state
        User::truncate();

        // Create the admin user
        User::create([
            'name' => 'Admin Misidosi',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'), // Hashing the password
            'remember_token' => Str::random(60), // Generating a random token
        ]);
    }
}
