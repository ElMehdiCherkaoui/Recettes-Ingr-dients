<?php

namespace App\Http\Controllers\comments;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexCommentsController extends Controller
{
    public function store(Request $request, Recipes $recipe)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Comment::create([
            'content'   => $request->content,
            'users_id'   => Auth::id(),
            'recipes_id' => $recipe->id,
        ]);

        return redirect()->back();
    }
}