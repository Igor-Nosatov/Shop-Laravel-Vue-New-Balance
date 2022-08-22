<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Джон',
                'password' => bcrypt('12345678'),
                'role_id' => '3',
                'email' => 'admin@test.com',
            ],
       
            [
                'name' => 'Джон',
                'password' => bcrypt('666666'),
                'role_id' => '2',
                'email' => 'member1@test.com',
            ],
       
            [
                'name' => 'Джон',
                'password' => bcrypt('166666'),
                'role_id' => '2',
                'email' => 'member2@test.com',
            ]
        );

    }
}
