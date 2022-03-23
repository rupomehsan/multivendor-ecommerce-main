<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryPersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->firstName,
            "phone"=>$this->faker->phoneNumber,
            "email"=>$this->faker->email,
            "identity_type"=>$this->faker->lastName,
            "identity_number"=>$this->faker->randomNumber()
        ];
    }
}
