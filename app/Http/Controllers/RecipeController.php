<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\User;

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

  public function bookmark(Request $request, Recipe $recipe) {
    $user = auth()->user();
    if (!$user->bookmarkedRecipes()->where('recipe_id', $recipe->id)->exists()) {
        $user->bookmarkedRecipes()->attach($recipe->id);
    }
    return redirect()->back()->with('success', 'Recipe bookmarked!');
  }

  public function unbookmark(Request $request, Recipe $recipe) {
    $user = auth()->user();
    $user->bookmarkedRecipes()->detach($recipe->id);
    return redirect()->back()->with('success', 'Recipe unbookmarked!');
  }

  public function bookmarkedRecipes() {
    $user = auth()->user();
    $bookmarkedRecipes = $user->bookmarkedRecipes()->get();

    return view('recipes.bookmarked', ['bookmarkedRecipes' => $bookmarkedRecipes]);
  }
}
