<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userCommentsController extends Controller
{
    public function index()
    {
        return view('profile.comments');
    }
}