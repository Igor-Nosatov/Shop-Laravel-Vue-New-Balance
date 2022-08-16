<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;
use phpDocumentor\Reflection\Types\Null_;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayValues = ['runs_small', 'true_size', 'runs_large'];
        return [
            'review_headline' => $this->faker->name(),
            'nickname' => $this->faker->name(),
            'comment' => $this->faker->text($maxNbChars = 200),
            'overall_fit' => $arrayValues[rand(0, 2)],
            'rating' => rand(1, 5),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'location' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'policy_agree' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'user_id' => NULL,
            'product_id' => Product::inRandomOrder()->take(1)->id,
        ];
    }
}
