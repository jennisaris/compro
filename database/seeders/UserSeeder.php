<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        // You can add other users here if needed
        // User::updateOrCreate(
        //     ['email' => 'staff@example.com'],
        //     [
        //         'name' => 'Staff User',
        //         'password' => Hash::make('password'),
        //         'role' => 'staff',
        //         'email_verified_at' => now(),
        //     ]
        // );
    }
}
