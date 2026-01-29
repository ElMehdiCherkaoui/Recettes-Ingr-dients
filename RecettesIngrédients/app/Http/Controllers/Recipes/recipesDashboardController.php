<?php

namespace App\Http\Controllers\Recipes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipes;

class recipesDashboardController extends Controller
{


    public function index()
    {

        $categories = Category::all();
        $ingredients = Ingredient::all();
        $recipes = Recipes::with(['category', 'ingredient', 'user'])->latest()->get();

        return view('recipes.index', compact('recipes', 'categories', 'ingredients'));
    }

    public function filter(Request $request)
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();

        $query = Recipes::query();

        if ($request->filled('search')) {
            $query->where('title', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->filled('category')) {
            $query->where('categories_id', $request->category);
        }

        $recipes = $query->orderBy('created_at', 'desc')->get();

        return view('recipes.index', compact('recipes', 'categories', 'ingredients'));
    }
}
