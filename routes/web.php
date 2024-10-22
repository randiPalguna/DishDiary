<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('recipe.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');

Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');

Route::get('/recipe/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipe.edit');

Route::put('/recipe/{recipe}/update', [RecipeController::class, 'update'])->name('recipe.update');

Route::post('/recipe/{recipe}/increment-uptoves', [RecipeController::class, 'incrementUptoves'])->name('recipe.incrementUptoves');

Route::delete('/recipe/{recipe}/destroy', [RecipeController::class, 'destroy'])->name('recipe.destroy');
