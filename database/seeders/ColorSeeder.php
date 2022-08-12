<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('colors')->insert(
            [
                ['name' => 'Black'],
                ['name' => 'Green'],
                ['name' => 'White'],
                ['name' => 'Red'],
                ['name' => 'Blue'],
                ['name' => 'Brown'],
                ['name' => 'Gray'],
                ['name' => 'Yellow'],
                ['name' => 'Orange'],
                ['name' => 'Purple'],
                ['name' => 'Pink'],
                ['name' => 'Tan'],
            ]
        );
    }
}

