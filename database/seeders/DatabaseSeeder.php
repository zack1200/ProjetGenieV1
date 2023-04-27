<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this ->call(CompaignsSeeder::class);
        $this ->call(CompaignItemSeeder::class);
        $this ->call(ItemsSeeder::class);
        $this ->call(ColorsSeeder::class);
        $this ->call(TaillesSeeder::class);
        $this ->call(ItemColorSeeder::class);
        $this ->call(ItemTailleSeeder::class);      
        $this ->call(UsersSeeder::class);
        
    }
}
