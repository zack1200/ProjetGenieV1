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
                'nom' => 'zakaria',
                'CodeCouleur' => '#1A171B',               
                'created_at'=> date('Y-m-d H-i-s'),  
            ],
            [
                'nom' => 'zakaria',
                'CodeCouleur' => '#1A171B',               
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
