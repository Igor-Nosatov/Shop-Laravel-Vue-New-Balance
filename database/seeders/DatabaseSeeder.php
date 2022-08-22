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
        $this->call(ColorProductSeeder::class);
        $this->call(FeatureProductSeeder::class);
        $this->call(FootwearSizeProductSeeder::class);
        $this->call(ModelNumberProductSeeder::class);
        $this->call(WidthProductSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(ImageProductSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
       
    }
}
