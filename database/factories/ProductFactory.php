<?php

namespace Database\Factories;

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
    public function definition()
    {
        $arrayShoesName = [
            'Fresh Foam X 1080v12',
            '574 Legacy','Fuel Cell 996v4.5',
            '996v4',
            'Fresh Foam X Lav V2'
        ];

        return [
            'name' => 'New Balance'.$arrayShoesName[rand(0,5)],
            'description' => $this->faker->text($maxNbChars = 200),
            'style_code' => '#'.$this->faker->numberBetween($min = 1000, $max = 9000),
            'price' => $this->faker->randomDigit(),
            'gender_id' => Gender::inRandomOrder()->take(1)->id,
            'category_id' => Category::inRandomOrder()->take(1)->id,
        ];
    }
}
