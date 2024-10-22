<?php

namespace App\Http\Controllers;
use App\Models\Recipe;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
  public function index() {
    $recipes = Recipe::all();
    return view('recipes.index', ['recipes' => $recipes]);
  }

  public function create() {
    return view('products.create');
  }
}
