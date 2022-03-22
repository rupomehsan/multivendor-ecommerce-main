<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "coupon_name"=>str::random(10),
            "type"=> "Percentage",
            "amount"=>$this->faker->numberBetween(1,90),
            "per_user_use"=>$this->faker->numberBetween(1,10),
            "start_date"=>$this->faker->date(),
            "end_date"=>$this->faker->date()
        ];
    }
}
