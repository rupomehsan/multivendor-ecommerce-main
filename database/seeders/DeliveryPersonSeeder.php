<?php

namespace Database\Seeders;

use App\Models\DeliveryPerson;
use Illuminate\Database\Seeder;

class DeliveryPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryPerson::factory()->count(5)->create();
    }
}
