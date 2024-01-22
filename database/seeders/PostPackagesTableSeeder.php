<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_packages')->insert([
            [
                'name' => 'Free',
            ],
            [
                'name' => 'Basic',
            ],
            [
                'name' => 'Pro',
            ]
        ]);
    }
}
