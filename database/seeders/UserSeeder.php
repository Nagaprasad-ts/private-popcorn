<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' =>'Mbc@1122', // You should change this in production
        ]);

        User::create([
            'name' => 'Seo',
            'email' => 'seo@example.com',
            'password' => 'seo@123', // You should change this in production
        ]);
    }
}
