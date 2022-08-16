<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WidthProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 300; $i++) {
            
            DB::table('width_product')->insert(
                [
                    [
                        'width_id' => rand(1, 6),
                        'product_id' => rand(1, 120),
                    ],
                ]
            );
        }
    }
}
