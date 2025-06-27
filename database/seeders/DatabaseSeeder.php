<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
            'created_at' => now(),
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'created_at' => now(),
        ]);
    }
}
