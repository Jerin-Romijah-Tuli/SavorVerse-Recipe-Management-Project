<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RecipeController;

Route::get('/', [RecipeController::class, 'index']);
Route::get('/recipe/{id}', [RecipeController::class, 'show']);

// Route for displaying the signup page
Route::get('/signup', [App\Http\Controllers\AuthController::class,'showSignupForm'])->name('register');
Route::post('/signup', [App\Http\Controllers\AuthController::class, 'handleSignup'])->name('signup.submit');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'handleLogin'])->name('login.submit');



Route::get('/snacks', [RecipeController::class, 'showSnacks'])->name('snacks');

Route::get('/salad', [RecipeController::class, 'showSalad'])->name('salad');


Route::get('/noodles', [RecipeController::class, 'showNoodles'])->name('noodles');

Route::get('/drinks', [RecipeController::class, 'showDrinks'])->name('drinks');

Route::get('/rice', [RecipeController::class, 'showRice'])->name('rice');

Route::get('/dessert', [RecipeController::class, 'showDessert'])->name('dessert');

Route::get('/australian', [RecipeController::class, 'showAustralian'])->name('australian');


Route::get('/korean', [RecipeController::class, 'showKorean'])->name('korean');

Route::get('/chinese', [RecipeController::class, 'showChinese'])->name('chinese');

Route::get('/thai', [RecipeController::class, 'showThai'])->name('thai');

Route::get('/southasian', [RecipeController::class, 'showSouthAsian'])->name('southasian');

Route::get('/american', [RecipeController::class, 'showAmerican'])->name('american');

Route::get('/italian', [RecipeController::class, 'showItalian'])->name('italian');

Route::get('/japanese', [RecipeController::class, 'showJapanese'])->name('japanese');

Route::get('/all-recipes', [RecipeController::class, 'showAllRecipes'])->name('all-recipes');

Route::get('/search', [RecipeController::class, 'searchRecipes'])->name('search-recipes');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
