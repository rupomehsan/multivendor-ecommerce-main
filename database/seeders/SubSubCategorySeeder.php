<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubSubCategory;
class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubSubCategory::factory()->count(10)->create();
    }
}
