<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
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
            "name" =>$this->faker->firstName,
            "image" =>$this->faker->imageUrl('100','100'),
        ];
    }
}
