<?php

namespace App\Http\Controllers\comments;

use App\Http\Controllers\Controller;


class indexCommentsController extends Controller
{
    public function index()
    {
        return view('comments.index');
    }
}