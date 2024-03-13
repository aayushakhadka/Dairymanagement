<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Detail;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' =>bcrypt('password'),
            'role' => 'admin', 
        ]);


       

        $this->call([
            DetailSeeder::class,
        ]);
    }
}
