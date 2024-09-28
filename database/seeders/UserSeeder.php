<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'nibirhossain.cse@gmail.com',
            'password' => Hash::make('password'), // Use Hash for password encryption
            'role' => 'admin',

        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'nibirhasan550@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'customer',

        ]);
    }
}
