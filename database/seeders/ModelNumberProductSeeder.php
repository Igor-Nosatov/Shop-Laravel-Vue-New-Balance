<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelNumberProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 500; $i++) {
            DB::table('model_number_product')->insert(
                [
                    [
                        'model_number_id' => rand(1, 11),
                        'product_id' => rand(1, 120),
                    ],
                ]
            );
        }
    }
}
