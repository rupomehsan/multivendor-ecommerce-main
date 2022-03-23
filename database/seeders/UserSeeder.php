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
           "name"=>"superAdmin",
           "email"=>"superadmin@gmail.com",
           "password"=> Hash::make("123456"),
            "user_role"=> ["1"]
        ]);
        User::create([
           "name"=>"demouser",
           "email"=>"demouser@gmail.com",
           "password"=> Hash::make("123456"),
            "user_role"=> ["1"]
        ]);
        User::create([
            "name"=>"admin",
            "email"=>"admin@gmail.com",
            "password"=> Hash::make("123456"),
            "user_role"=> ["2"]
        ]);
        User::create([
           "name"=>"vendor",
           "email"=>"vendor@gmail.com",
           "password"=> Hash::make("123456"),
            "user_role"=> ["3"]
        ]);
        User::create([
            "name"=>"user",
            "email"=>"user@gmail.com",
            "password"=> Hash::make("123456"),
            "user_role"=> ["4"]
        ]);
    }
}
