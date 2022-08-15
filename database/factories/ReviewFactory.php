<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $arrayValues = ['runs_small', 'true_size','runs_large'];
        $randomNumber = [1,2,3,4,5];
        return [
            'review_headline' => $this->faker->name(),
            'nickname' => $this->faker->name(),
            'comment' => $this->faker->text($maxNbChars = 200),
            'overall_fit' =>$arrayValues[rand(0,2)],
            'rating' =>  $randomNumber[rand(0,4)],
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'location' => $this->faker->streetAddress(),
            'email' => $this->faker->email(),
            'policy_agree' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'user_id' => User::inRandomOrder()->take(1)->id,
            'product_id' => Product::inRandomOrder()->take(1)->id,
        ];
    }
}
