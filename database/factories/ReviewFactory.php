<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id"=>$this->faker->numberBetween(1,10),
            "customer_id"=>$this->faker->numberBetween(1,10),
            "author"=>$this->faker->name,
            "text"=>$this->faker->sentence(5),
            "rating"=>$this->faker->numberBetween(1,5),
        ];
    }
}
