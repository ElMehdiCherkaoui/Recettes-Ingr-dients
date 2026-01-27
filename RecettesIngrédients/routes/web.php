<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminRecipesController;
use App\Http\Controllers\Admin\AdminRecipeOfTheDayController;
use App\Http\Controllers\Auth\authLoginController;
use App\Http\Controllers\Auth\authRegisterController;
use App\Http\Controllers\User\userProfileController;
use App\Http\Controllers\User\userRecipesController;
use App\Http\Controllers\User\userFavoritesController;
use App\Http\Controllers\User\userCommentsController;
use App\Http\Controllers\recipes\recipesDashboardController;
use App\Http\Controllers\recipes\recipesDetailsController;
use App\Http\Controllers\recipes\recipesEditController;
use App\Http\Controllers\recipes\recipesCreateController;
use App\Http\Controllers\recipes\recipesPdfController;
use App\Http\Controllers\comments\indexCommentsController;

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin.dashboard');

Route::get('/admin/recipes', [AdminRecipesController::class, 'index'])
    ->name('admin.recipes');

Route::get('/admin/recipe-of-the-day', [AdminRecipeOfTheDayController::class, 'index'])
    ->name('admin.recipe-of-the-day');

Route::get('/login', [authLoginController::class, 'index'])
    ->name('auth.login');

Route::get('/register', [authRegisterController::class, 'index'])
    ->name('auth.register');


Route::get('/profile', [userProfileController::class, 'index'])
    ->name('profile.index');

Route::get('/profile-recipes', [userRecipesController::class, 'index'])
    ->name('profile.recipes');

Route::get('/profile-favorites', [userFavoritesController::class, 'index'])
    ->name('profile.favorites');

Route::get('/profile-comments', [userCommentsController::class, 'index'])
    ->name('profile.comments');

Route::get('/recipes', [recipesDashboardController::class, 'index'])
    ->name('recipe.index');

Route::get('/recipes-show', [recipesDetailsController::class, 'index'])
    ->name('recipe.details');


Route::get('/recipes-edit', [recipesEditController::class, 'index'])
    ->name('recipe.edit');

Route::get('/recipes-create', [recipesCreateController::class, 'index'])
    ->name('recipe.create');

Route::get('/recipes-pdf', [recipesPdfController::class, 'index'])
    ->name('recipe.pdf');

Route::get('/comments', [indexCommentsController::class, 'index'])
    ->name('comments.index');

Route::get('/', function () {
    return view('home.index');
});