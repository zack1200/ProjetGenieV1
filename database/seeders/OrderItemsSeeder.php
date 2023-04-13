<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id'=> 1,
                'campaign_item_id'=> 1,
                'quantity'=> 7,
                'price'=> 420,
                'created_at'=> date('Y-m-d H-i-s'),
            ]
        ]);
    }
}
