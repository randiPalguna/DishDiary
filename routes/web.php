<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return redirect()->route('recipe.index');
});

Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');

Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');

Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');

Route::get('/recipe/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipe.edit');

Route::put('/recipe/{recipe}/update', [RecipeController::class, 'update'])->name('recipe.update');

Route::post('/recipe/{recipe}/increment-uptoves', [RecipeController::class, 'incrementUptoves'])->name('recipe.incrementUptoves');

Route::delete('/recipe/{recipe}/destroy', [RecipeController::class, 'destroy'])->name('recipe.destroy');