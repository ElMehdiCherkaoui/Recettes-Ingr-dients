<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value),
        );
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            get: fn($value) => strtolower($value),
            set: fn($value) => strtolower($value),
        );
    }

    public static function register(array $data)
    {
        if (empty($data['name']) || empty($data['email']) || empty($data['password'])) {
            throw ValidationException::withMessages(['message' => 'All fields are required.']);
        }
        return self::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public static function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return Auth::user();
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }
    public static function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return true;
    }
}