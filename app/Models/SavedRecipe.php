<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Recipe;
use App\Models\User;

class SavedRecipe extends Model
{
    // A Recipe has one SavedRecipe and the SavedRecipe belongs to the Recipe
    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class, 'id');
    }

    // A user has many SavedRecipe and the SavedRecipe belongs to the user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
}
