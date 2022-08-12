<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WidthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('widths')->insert(
            [
                ['name' => 'Kids Standard (M)'],
                ['name' => 'Men Narrow (B)'],
                ['name' => 'Men Wide (2E)'],
                ['name' => 'Women Standard (B)'],
                ['name' => 'Women X-Wide (2E)'],
                ['name' => 'Men Standard (D)'],
                ['name' => 'Women Wide (D)'],
                ['name' => 'Kids Wide (W)'],
            ]
        );
    }
}


