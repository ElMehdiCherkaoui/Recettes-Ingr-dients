<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminRecipeOfTheDayController extends Controller
{
    public function index()
    {
        return view('admin.recipe-of-the-day');
    }
}