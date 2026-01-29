<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userRecipesController extends Controller
{
    public function index()
    {
        $recipes = Recipes::with('category')->where('users_id', Auth::id())->latest()->get();

        return view('profile.recipes', compact('recipes'));
    }

    public function destroy(Recipes $recipe)
    {
        $recipe->delete();

        return redirect()->route('profile-recipes.index');
    }
}