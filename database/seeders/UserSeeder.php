<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $pw = rand(1000000000, 9999999999);
            User::create([
                'email'    => Str::random(5) . '@example.com',
                'password' => Hash::make($pw), // Hashing the password
            ]);
        }
    }
}
