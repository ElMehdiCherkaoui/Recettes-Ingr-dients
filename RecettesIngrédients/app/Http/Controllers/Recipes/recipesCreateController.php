<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipes;
use Illuminate\Support\Facades\Auth;

class recipesCreateController extends Controller
{
    public function index()
    {
        return view('recipes.create', [
            'categories' => Category::all(),
            'ingredients' => Ingredient::all(),
        ]);
    }
    public function store(Request $request)
    {

        Recipes::create([
            'title'          => $request['title'],
            'description'    => $request['description'],
            'steps'          => $request['steps'],
            'image'          => $request['image'],
            'isRecipeOfDay'  => false,
            'users_id'       => Auth::id(),
            'categories_id'  => $request['categories_id'],
            'ingredients_id' => $request['ingredients_id'],
        ]);

        return redirect()->route('profile.index');
    }
}