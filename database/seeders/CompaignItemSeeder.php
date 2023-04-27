<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompaignItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compaign_item')->insert([
            [
                'item_id' => 1,
                'compaign_id' => 1,                   
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
