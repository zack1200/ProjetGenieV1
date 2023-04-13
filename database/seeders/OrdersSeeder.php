<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'created_at'=> date('Y-m-d H-i-s'),
            ]
        ]);
    }
}
