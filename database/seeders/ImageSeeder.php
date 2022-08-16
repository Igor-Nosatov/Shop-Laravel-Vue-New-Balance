<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert(
            [
                ['path' => 'image1'],
                ['path' => 'image2'],
                ['path' => 'image3'],
                ['path' => 'image4'],
            ]
        );
    }
}
