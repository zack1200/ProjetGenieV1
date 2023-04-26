<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TaillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tailles')->insert([
            [
                'taille' => 'S',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'taille' => 'M',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'taille' => 'L',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
        ]);
    }
}
