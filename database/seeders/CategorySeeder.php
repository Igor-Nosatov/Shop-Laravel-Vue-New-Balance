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
                ['name' => 'Skateboarding'],
                ['name' => 'Boots'],
                ['name' => 'Work Shoes'],
            ]
        );
    }
}
