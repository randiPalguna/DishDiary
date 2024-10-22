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

  public function edit(Recipe $recipe) {
    return view('recipes.edit', ['recipe' => $recipe]);
  }

  public function update(Recipe $recipe, Request $request) {
    $data = $request->validate([
      'title' => 'required',
      'image' => 'required',
      'ingredients' => 'required',
      'instructions' => 'required'
    ]);
    $recipe->update($data);

    return redirect(route('recipe.index'))->with('success', 'Recipe Updated Successfully');
  }

  public function incrementUptoves(Recipe $recipe) {
     $recipe->increment('uptoves');
     return redirect(route('recipe.index'))->with('success', 'Uptoves incremented successfully!');
  }
  
  public function destroy(Recipe $recipe) {
    $recipe->delete();
    return redirect(route('recipe.index'))->with('success', 'Recipe Deleted Successfully');
  }
}
