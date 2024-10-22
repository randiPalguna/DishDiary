<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return redirect()->route('recipe.index');
});

Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');

Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');