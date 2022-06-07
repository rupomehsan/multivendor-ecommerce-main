<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Coupon;
use App\Models\StoreDetails;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
            AttributeSedder::class,
            SliderSeeder::class,
            CarouselsSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            CouponSeeder::class,
            DeliveryPersonSeeder::class,
            NotificationSeeder::class,
            SettingSeeder::class,
            SmtpSeeder::class,
            ProductSeeder::class,
            ReviewSeder::class,
            RecurringSeeder::class,
            SupplierSeeder::class,
            StoreDetailsSeeder::class,
            DivisionSeeder::class,
            DistrictSeeder::class,
            StationSeeder::class,
        ]);
    }
}
