<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipes;
use Illuminate\Http\Request;

class recipesDetailsController extends Controller
{
    public function index(Recipes $recipe)
    {
        $recipe->load([
            'category',
            'ingredient',
            'user',
            'comments.user'
        ]);

        return view('recipes.show', compact('recipe'));
    }
}
