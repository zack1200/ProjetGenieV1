<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_roles')->insert([
            [
                'user_id'=> 1,
                'role_id'=> 1,
                'created_at'=> date('Y-m-d H-i-s'),
            ],
            [
                'user_id'=> 2,
                'role_id'=> 2,
                'created_at'=> date('Y-m-d H-i-s'),
            ],
        ]);
    }
}
