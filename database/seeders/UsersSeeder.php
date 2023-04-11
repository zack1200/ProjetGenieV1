<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     *  @return void
     */
   

    public function run()
    {
        DB::table('users')->insert([
            [
                'nom' => 'zakaria',
                'email' =>'zakaria@gmail.com',
                'password' =>Hash::make('123'),
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nom' => 'zakaria',
                'email' =>'zakaria2@gmail.com',
                'password' =>Hash::make('123'),
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
