<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert (        
            [
                'id' => '1',
                'name' => 'listener'
            ],
            [
                'id' => '2',
                'name' => 'announcer'
            ],
            [
                'id' => '3',
                'name' => 'admin'
            ]
        );
    }
}
