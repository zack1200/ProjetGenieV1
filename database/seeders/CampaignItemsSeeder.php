<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campaign_items')->insert([
            [
                'campaign_id'=> 1,
                'name' => 'Un Article',
                'description' =>'According to all known laws of aviation-',
                'image_url' =>'https://th.bing.com/th/id/OIP.vFTBfM-YXVUcaE2E52oF_QHaE8?pid=ImgDet&rs=1',
                'price'=> 250,
                'created_at'=> date('Y-m-d H-i-s'), 
            ]
        ]);
    }
}
