<?php

namespace Database\Seeders;

use App\Models\StoreDetails;
use Illuminate\Database\Seeder;

class StoreDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreDetails::factory()->count(3)->create();
    }
}
