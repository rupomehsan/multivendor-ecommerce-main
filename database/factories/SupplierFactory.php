<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "code_name"=>$this->faker->randomLetter(10),
            "email"=>$this->faker->email,
            "phone"=>$this->faker->phoneNumber,
            "address"=>$this->faker->address,
            "city"=>$this->faker->city,
            "state"=>$this->faker->streetAddress,
            "country"=>$this->faker->country,
            "details"=>$this->faker->paragraph,
        ];
    }
}
