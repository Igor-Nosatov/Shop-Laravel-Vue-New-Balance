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
        return [
            'title' => strtoupper(bin2hex(random_bytes(2))) . ' New Balance',
            'description' => 'The new snikers pushes its classic sources of inspiration even further into unexplored territory, 
            with a time-bending design inspired by the speculative technological optimism of 1970s concept cars.
             Three distinctive traction outsole patterns and angular features are employed to give the familiar low-cut sleekness of 
             the eras running shoes an aggressive, experimental edge. Snickers is the future that the past dreamed 
             about, come to life.',
            'style_code' => '#' . rand(1000, 9999),
            'price' => rand(2212, 9999),
            'gender_id' => rand(1, 4),
            'category_id' => rand(1, 6),
            'support_type_id' => rand(1, 3),
        ];
    }
}
