<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemTailleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('taille_item')->insert([
            [
                'item_id' => 1,   
                'taille_id' => 1,                 
                'created_at'=> date('Y-m-d H-i-s'),  
            ]
        ]);
    }
}
