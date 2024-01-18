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
        $this->call(PriceRangesTableSeeder::class);
        // $this->call(ProvincesTableSeeder::class);
        // $this->call(AmphursTableSeeder::class);
        // $this->call(MainCategoriesTableSeeder::class);
        // $this->call(SubCategoriesTableSeeder::class);
        // $this->call(SubMinorCategoriesTableSeeder::class);
        // $this->call(PriceRangesTableSeeder::class);
        
        
    }
}

