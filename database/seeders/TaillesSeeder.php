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
                'nomtaille' => 'XS',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nomtaille' => 'S',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nomtaille' => 'M',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nomtaille' => 'L',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nomtaille' => 'XL',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nomtaille' => 'XXL',                
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
        ]);
    }
}
