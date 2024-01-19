<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'is_admin' => '1',
            'name' => 'admin',
            'email' => 'jo@gmail.com',
            'password' => bcrypt('11111111')
        ]);
    }
}
