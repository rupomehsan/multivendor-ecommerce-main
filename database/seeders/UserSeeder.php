<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            "name" => "superAdmin",
            "email" => "superadmin@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["1", "4"]
        ]);
        User::create([
            "name" => "demouser",
            "email" => "demouser@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["1", "4"]
        ]);
        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["2", "4"]
        ]);
        User::create([
            "name" => "vendor1",
            "email" => "vendor1@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["3", "4"]
        ]);
        User::create([
            "name" => "vendor2",
            "email" => "vendor2@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["3", "4"]
        ]);
        User::create([
            "name" => "vendor3",
            "email" => "vendor3@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["3", "4"]
        ]);
        User::create([
            "name" => "customer",
            "email" => "customer@gmail.com",
            "password" => Hash::make("123456"),
            "user_role" => ["4"]
        ]);
    }
}
