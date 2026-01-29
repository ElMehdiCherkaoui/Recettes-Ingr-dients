<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipes;
use Illuminate\Http\Request;

class AdminRecipeOfTheDayController extends Controller
{
    public function index()
    {
        $recipes = Recipes::with(['user', 'category'])->orderByDesc('isRecipeOfDay')->get();

        $recipeOfDay = Recipes::with(['user', 'category'])->where('isRecipeOfDay', true)->first();

        return view('admin.recipe-of-the-day', compact('recipes', 'recipeOfDay'));
    }
    public function update(Request $request)
    {

        Recipes::where('isRecipeOfDay', true)->update(['isRecipeOfDay' => false]);

        Recipes::where('id', $request->recipe_id)->update(['isRecipeOfDay' => true]);

        return redirect()->route('admin.recipe-of-the-day');
    }
}