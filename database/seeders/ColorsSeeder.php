<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colors')->insert([
            [
                'nom' => 'ROUGE',
                'CodeCouleur' => '#FF0000',               
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nom' => 'BLEU',
                'CodeCouleur' => '#0078FF',               
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
