<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubSubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_id" =>$this->faker->numberBetween(1,9),
            "sub_category_id" =>$this->faker->numberBetween(1,9),
            "name" =>$this->faker->name,
            "image" =>$this->faker->imageUrl('100','100'),
        ];
    }
}
