<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Detail::create([
            'name' => 'Ram',
            'number' => '123456',
            'quantity' => 5,
            'price' => 200,
            'type' => 'Cow',
            'user_id' => 1 
        ]);  
    }
}
