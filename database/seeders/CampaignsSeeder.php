<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campaigns')->insert([
            [
                'name' => 'Une Campagne',
                'description' =>'According to all known laws of aviation-',
                'start_date'=> date('Y-m-d H-i-s'), 
                'end_date'=> date('Y-m-d H-i-s'), 
                'created_at'=> date('Y-m-d H-i-s'),
            ]
        ]);
    }
}
