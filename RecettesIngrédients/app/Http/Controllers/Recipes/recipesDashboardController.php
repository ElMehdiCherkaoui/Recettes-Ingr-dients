<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class recipesDashboardController extends Controller
{
    public function index()
    {
        return view('recipes.index');
    }
}