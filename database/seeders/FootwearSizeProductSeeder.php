<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FootwearSizeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 500; $i++) {
            DB::table('footwear_size_product')->insert(
                [
                    [
                        'footwear_size_id' => rand(1, 20),
                        'product_id' => rand(1, 120),
                    ],
                ]
            );
        }
    }
}
