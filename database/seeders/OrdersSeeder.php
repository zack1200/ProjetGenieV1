<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id'=> 1,
                'campaign_id'=> 1,
                'status' =>'Dead',
                'total_amount'=> 400,
                'end_date'=> date('Y-m-d H-i-s'), 
                'created_at'=> date('Y-m-d H-i-s'),
            ]
        ]);
    }
}
