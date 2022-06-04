<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            "name"=>$this->faker->paragraph(1),
            "description"=>$this->faker->paragraph(),
            "model"=>$this->faker->numberBetween(1,10),
            "category_id"=>$this->faker->numberBetween(1,10),
            "brand_id"=>$this->faker->numberBetween(1,10),
            "quantity"=>$this->faker->numberBetween(1,10),
            "price"=>$this->faker->numberBetween(100,500),
            "vendors_id"=>$this->faker->numberBetween(4,6),
            "product_code"=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            "attributes"=>'[{"color":"red","size":"A"}]'
        ];
    }
}
