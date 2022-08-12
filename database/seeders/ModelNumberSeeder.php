<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('model_numbers')->insert(
            [
                ['name' => '237'],
                ['name' => '327'],
                ['name' => '550'],
                ['name' => '574'],
                ['name' => '860'],
                ['name' => '880'],
                ['name' => '990'],
                ['name' => '997'],
                ['name' => '1080'],
                ['name' => '2002'],
                ['name' => '57/40'],
            ]
        );
    }
}

