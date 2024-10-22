<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\SavedRecipe;

class Recipe extends Model
{
    // A Recipe has one SavedRecipe and the SavedRecipe belongs to the Recipe
    public function saved_recipe(): HasOne
    {
        return $this->hasOne(SavedRecipe::class, 'recipe_id');
    }
    
    protected $fillable = [
        'image',
        'title',
        'ingredients',
        'instruction',
        'uptoves'
    ];
}
