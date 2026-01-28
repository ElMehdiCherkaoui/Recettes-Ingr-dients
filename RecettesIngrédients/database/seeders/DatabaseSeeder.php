<?php

namespace Database\Seeders;

use App\Models\categoriesModel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategoriesSeeder::class,
            IngredientSeeder::class,
            RecipeSeeder::class,
            CommentSeeder::class,
            FavoriteSeeder::class,
        ]);
    }
}