<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RecurringFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" =>$this->faker->name,
            "price" =>$this->faker->numberBetween(1,100),
            "duration" =>$this->faker->numberBetween(1,12),
            "cycle" =>$this->faker->numberBetween(1,10),
        ];
    }
}
