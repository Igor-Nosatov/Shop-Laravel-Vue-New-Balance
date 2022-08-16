<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 2400; $i++) {
            $faker = \Faker\Factory::create();
            $arrayValues = ['runs_small', 'true_size', 'runs_large'];
            DB::table('reviews')->insert(
                [
                    [
                        'review_headline' =>$faker->name(),
                        'nickname' =>$faker->name(),
                        'comment' =>$faker->name(),
                        'overall_fit' => $arrayValues[rand(0, 2)],
                        'rating' => rand(1, 5),
                        'image' =>$faker->imageUrl($width = 640, $height = 480),
                        'location' =>$faker->streetAddress(),
                        'email' =>$faker->email(),
                        'policy_agree' =>$faker->boolean($chanceOfGettingTrue = 50),
                        'user_id' => NULL,
                        'product_id' => rand(1, 120),
                    ],
                ]
            );
        }

    }
}
