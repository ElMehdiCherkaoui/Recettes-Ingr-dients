<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Category;
use App\Models\Ingredient;

class Recipes extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'steps',
        'image',
        'isRecipeOfDay',
        'users_id',
        'categories_id',
        'ingredients_id',
    ];


    protected $casts = [
        'isRecipeOfDay' => 'boolean',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'ingredients_id');
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucfirst($value),
            set: fn($value) => strtolower($value),
        );
    }
    public function addIngrediants($id) {}
    public function removeIngrediants($id) {}
}