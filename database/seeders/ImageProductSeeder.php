<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 120; $i++) {
            DB::table('image_product')->insert(
                [
                    [
                        'image_id' => 1,
                        'product_id' => $i,
                    ],
                    [
                        'image_id' => 2,
                        'product_id' => $i,
                    ],
                    [
                        'image_id' => 3,
                        'product_id' => $i,
                    ],
                    [
                        'image_id' => 4,
                        'product_id' => $i,
                    ],
                ]
            );
        }
    }
}
