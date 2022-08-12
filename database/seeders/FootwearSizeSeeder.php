<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FootwearSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('footwear_sizes')->insert(
            [
                ['name' => '5'],
                ['name' => '5.5'],
                ['name' => '6'],
                ['name' => '6.5'],
                ['name' => '7'],
                ['name' => '7.5'],
                ['name' => '8'],
                ['name' => '8.5'],
                ['name' => '9'],
                ['name' => '9.5'],
                ['name' => '10'],
                ['name' => '10.5'],
                ['name' => '11'],
                ['name' => '11.5'],
                ['name' => '12'],
                ['name' => '13'],
                ['name' => '14'],
                ['name' => '15'],
                ['name' => '16'],
                ['name' => '17'],
                ['name' => '18'],
            ]
        );
    }
}

