<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipes;
use Illuminate\Http\Request;

class recipesEditController extends Controller
{
    public function index(Recipes $recipe)
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();

        return view('recipes.edit', compact('recipe', 'categories', 'ingredients'));
    }

    public function editPost(Request $request)
    {
        $recipe = Recipes::findOrFail($request->recipe_id);
        $categories = Category::all();
        $ingredients = Ingredient::all();

        return view('recipes.edit', compact('recipe', 'categories', 'ingredients'));
    }


    public function update(Request $request, Recipes $recipe)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'steps' => 'required|string',
            'categories_id' => 'required|exists:categories,id',
            'ingredients_id' => 'required|exists:ingredients,id',
            'image' => 'nullable|image|max:10240',
            'users_id' => 'required|exists:users,id',
        ]);

        $recipe->update($validated);

        return redirect()->route('profile-recipes.index');
    }
}