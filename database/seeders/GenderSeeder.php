<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('genders')->insert(
            [
                ['name' => 'Men'],
                ['name' => 'Women'],
                ['name' => 'Kids'],
                ['name' => 'Gender Neutral'],
            ]
        );
    }
}
