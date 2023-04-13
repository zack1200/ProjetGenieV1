<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'Super Admin',
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'name' => 'Admin',
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'name' => 'User',
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
