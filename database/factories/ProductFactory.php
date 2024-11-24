<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(4);
        return [
            //
            "title"=>$title,
            "slug"=>Str::slug($title),
            "description"=>$this->faker->paragraph,
            "stock"=>$this->faker->numberBetween(1,12),
            "price"=>$this->faker->numberBetween(1,999),
            "old_price"=>$this->faker->numberBetween(1,999),
            "image"=>$this->faker->imageUrl(640,480),
            "category_id"=>$this->faker->numberBetween(1,10),


        ];
    }
}
