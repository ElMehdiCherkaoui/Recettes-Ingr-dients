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

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/recipes', [AdminRecipesController::class, 'index'])->name('admin.recipes');

Route::get('/admin/recipe-of-the-day', [AdminRecipeOfTheDayController::class, 'index'])->name('admin.recipe-of-the-day');

Route::post('/admin/recipe-of-the-day', [AdminRecipeOfTheDayController::class, 'update'])->name('admin.recipe_of_day.update');

Route::get('/login', [authLoginController::class, 'index'])->name('auth.login');

Route::post('/login', [authLoginController::class, 'login'])->name('login.submit');

Route::post('/logout', [AuthLoginController::class, 'logout'])->name('logout');

Route::get('/register', [authRegisterController::class, 'index'])->name('auth.register');

Route::post('/register', [authRegisterController::class, 'register'])->name('register.submit');

Route::get('/profile', [userProfileController::class, 'index'])->name('profile.index');

Route::get('/profile-recipes', [userRecipesController::class, 'index'])->name('profile-recipes.index');

Route::get('/recipes/{recipe}/edit', [userRecipesController::class, 'edit'])->name('edit');

Route::put('/recipes/{recipe}', [userRecipesController::class, 'update'])->name('update');

Route::delete('/recipes-destroy/{recipe}', [userRecipesController::class, 'destroy'])->name('recipes.destroy');

Route::get('/profile-favorites', [userFavoritesController::class, 'index'])->name('profile.favorites');

Route::get('/profile-comments', [userCommentsController::class, 'index'])->name('profile.comments');

Route::get('/recipes', [recipesDashboardController::class, 'index'])->name('recipes.index');

Route::get('/recipes-show/{recipe}', [recipesDetailsController::class, 'index'])->name('recipes.show');

Route::get('/recipes-edit/{recipe}', [recipesEditController::class, 'index'])->name('recipes.edit');

Route::post('/recipes-update/{recipe}', [recipesEditController::class, 'update'])->name('recipes.update');

Route::get('/recipes-create', [recipesCreateController::class, 'index'])->name('recipes.create');

Route::post('/recipes-store', [recipesCreateController::class, 'store'])->name('recipes.store');

Route::post('/recipes-destory', [recipesCreateController::class, 'destroy'])->name('recipes.destroy');

Route::get('/recipes-pdf', [recipesPdfController::class, 'index'])->name('recipes.pdf');

Route::get('/comments', [indexCommentsController::class, 'index'])->name('comments.index');

Route::post('/recipes/filter', [recipesDashboardController::class, 'filter'])->name('recipes.filter');


Route::post('/recipes/{recipe}', [indexCommentsController::class, 'store'])->name('comments.store');

Route::get('/', function () {
    return view('home.index');
});