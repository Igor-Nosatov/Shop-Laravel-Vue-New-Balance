<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(FootwearSizeSeeder::class);
        $this->call(WidthSeeder::class);
        $this->call(SupportTypeSeeder::class);
        $this->call(ModelNumberSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
