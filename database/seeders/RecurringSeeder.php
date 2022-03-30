<?php

namespace Database\Seeders;

use App\Models\Recurring;
use Illuminate\Database\Seeder;

class RecurringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recurring::factory()->count(5)->create();
    }
}
