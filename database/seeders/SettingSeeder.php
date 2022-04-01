<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Setting::create([
            "system_name" => "E-Commerce",
            "app_version" => "1",
            "mail_address" => "demo@gmail.com",
            "update_app" => "1",
            "developed_by" => "Team Project X",
            "facebook" => "facbook.com",
            "instagram" => "instagram.com",
            "twitter" => "twitter.com",
            "youtube" => "youtube.com",
            "copyright" => "cpyright",
            "logo" => "",
            "description" => "description",
            "privacy_policy" => "privecy policy",
            "cookies_policy" => "cookies pilicy",
            "terms_policy" => "terms policy"
        ]);
    }
}
