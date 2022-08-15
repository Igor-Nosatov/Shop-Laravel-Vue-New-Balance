<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupportTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('support_types')->insert(
            [
                ['name' => 'Neutral Cushioning'],
                ['name' => 'Stability'],
                ['name' => 'Motion Control'],
            ]
        );
    }
}
