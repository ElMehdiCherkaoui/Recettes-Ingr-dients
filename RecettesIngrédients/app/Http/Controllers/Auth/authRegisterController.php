<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthRegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }


    public function register(Request $request)
    {

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => 'user',
            'password' => Hash::make($request['password']),
        ]);

        Auth::login($user);

        return redirect()->route('profile.index')->with('success', 'Registration successful!');
    }
}