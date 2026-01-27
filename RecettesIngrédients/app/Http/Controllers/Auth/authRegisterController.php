<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class authRegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
}