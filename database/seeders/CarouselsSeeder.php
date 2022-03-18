<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carousel::factory()->count(10)->create();
    }
}
