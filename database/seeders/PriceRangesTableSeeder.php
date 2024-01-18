<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PriceRangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_ranges')->insert([
            [
                'name' => 'น้อยกว่า 500,000',
                'min_price' => 0,
                'max_price' => 500000
            ],
            [
                'name' => '500,001 - 1,000,000',
                'min_price' => 500001,
                'max_price' => 1000000
            ],
            [
                'name' => '1,000,001 - 3,000,000',
                'min_price' => 1000001,
                'max_price' => 3000000
            ],
            [
                'name' => '3,000,001 - 5,000,000',
                'min_price' => 3000001,
                'max_price' => 5000000
            ],
            [
                'name' => '5,000,001 - 7,000,000',
                'min_price' => 5000001,
                'max_price' => 7000000
            ],
            [
                'name' => '7,000,001 - 10,000,000',
                'min_price' => 7000001,
                'max_price' => 10000000
            ],
            [
                'name' => '10,000,001 - 15,000,000',
                'min_price' => 10000001,
                'max_price' => 15000000
            ],
            [
                'name' => 'มากกว่า 15,000,000',
                'min_price' => 15000001,
                'max_price' => 150000000000
            ]
        ]);
    }
}
