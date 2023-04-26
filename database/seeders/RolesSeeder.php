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
                'role' => 'admin',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'role' => 'Client',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'role' => 'Super_admin',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
