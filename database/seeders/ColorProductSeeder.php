<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 120; $i++) {
            DB::table('color_product')->insert(
                [
                    [
                        'color_id' => rand(1, 12),
                        'product_id' => $i,
                    ],
                   
                ]
            );
        }
    }
}
