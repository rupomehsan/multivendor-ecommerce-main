<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" =>$this->faker->unique()->numberBetween(4,6),
            "store_name" =>$this->faker->title,
        ];
    }
}
