<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Running'],
                ['name' => 'Lifestyle'],
                ['name' => 'Training'],
                ['name' => 'Walking'],
                ['name' => 'Baseball'],
                ['name' => 'Skateboarding'],
                ['name' => 'Hiking & Trail'],
                ['name' => 'Boots'],
                ['name' => 'Soccer'],
                ['name' => 'Tennis'],
                ['name' => 'Golf'],
                ['name' => 'Lacrosse'],
                ['name' => 'Work Shoes'],
                ['name' => 'Basketball'],
                ['name' => 'Sandals'],
            ]
        );
    }
}
