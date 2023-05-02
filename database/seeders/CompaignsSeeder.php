<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compaigns')->insert([
            [
                'nom' => 'Session Hiver 2021',
                'description' => 'none',   
                'start_date'=>'2023-01-06',
                'end_date'=>'2023-06-07',
                'actif'=>1,
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
