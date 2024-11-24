<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "product_title"=>$this->faker->sentence(4), // "product_title"=>"Product Title
            
            "quantity"=>$this->faker->numberBetween(1,12),
            "price"=>$this->faker->numberBetween(1,999),
            "total"=>$this->faker->numberBetween(1,9999),
            "status"=>$this->faker->randomElement(["pending","paid","delivered"]),
            "user_id"=>$this->faker->numberBetween(1,10),
        ];
    }
}
