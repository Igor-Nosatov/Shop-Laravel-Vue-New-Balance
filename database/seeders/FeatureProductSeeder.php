<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FeatureProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 300; $i++) {
            DB::table('feature_product')->insert(
                [
                    [
                        'feature_id' => rand(1, 25),
                        'product_id' => rand(1, 120),
                    ],
                ]
            );
        }
    }
}
