<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminRecipesController extends Controller
{
    public function index()
    {
        return view('admin.recipes');
    }
}