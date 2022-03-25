<?php

namespace Database\Seeders;

use App\Models\Smtp;
use Illuminate\Database\Seeder;

class SmtpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Smtp::create([
            "name" => "smtp",
            "host" => "smtp.mailtrap.io",
            "port" => "2525",
            "encryption" => "tls",
            "username" => "70095290a165f2",
            "password" => "85bbb312fc39f2"
        ]);
    }
}
