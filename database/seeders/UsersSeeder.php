<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run()
    {
        DB::table('users')->insert([
            [
                'nom' => 'zakaria',
                'email' =>'zakaria@gmail.com',
                'password' =>'123',
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
