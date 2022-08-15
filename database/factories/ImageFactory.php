<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomNumber = [1,2,3,4,5,6,7];
        return [
            'path' =>public_path().'img/'. $randomNumber[rand(0,6)].'webp',
            'product_id' => Product::inRandomOrder()->take(1)->id,
        ];
    }
}
