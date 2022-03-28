<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarouselFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "category_id" =>$this->faker->numberBetween(1,10),
//            "image" =>$this->faker->imageUrl(100,100)
        ];
    }
}
