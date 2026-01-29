<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
    {

        $user = User::firstOrCreate(
            ['email' => 'admin@recetteingredients.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'role' => "admin",
            ]
        );

    }
}