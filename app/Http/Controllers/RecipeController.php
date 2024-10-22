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
    return view('recipes.create');
  }

  public function store(Request $request) { 
    $data = $request->validate([
      'title' => 'required',
      'image' => 'required',
      'ingredients' => 'required',
      'instructions' => 'required',
    ]);

    $newRecipe = Recipe::create($data);

    return redirect(route('recipe.index'));
  }
}
