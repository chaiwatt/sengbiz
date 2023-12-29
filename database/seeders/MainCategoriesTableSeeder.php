<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MainCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_categories')->insert([
            [
                'name' => 'ขายกิจการ'
            ],
            [
                'name' => 'พื้นที่ให้เช่า'
            ],
            [
                'name' => 'รับฝากขายสินค้า'
            ],
            [
                'name' => 'แนะนำแฟรนไชส์'
            ],
            [
                'name' => 'อสังหาริมทรัพย์'
            ],
            [
                'name' => 'คอร์สฝึกอาชีพ'
            ],
            [
                'name' => 'งานเอสเอ็มอี'
            ]
        ]);
    }
}
