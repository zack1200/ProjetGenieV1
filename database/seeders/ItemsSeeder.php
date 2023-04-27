<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'nom' => 'admin',   
                'max_items' => '4', 
                'mookup'=>'https://www.jokesforfunny.com/wp-content/uploads/2021/06/0596bdb89b60fe771acd2f5972a9d3e3-1158x1536.jpg',
                'prix' => '10',
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
