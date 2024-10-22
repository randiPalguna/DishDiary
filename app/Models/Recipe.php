<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\SavedRecipe;
use App\Models\User;

class Recipe extends Model
{
    public function usersWhoBookmarked(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'saved_recipes', 'recipe_id', 'user_id')
                    ->withTimestamps();
    }
    
    protected $fillable = [
        'title',
        'image',
        'ingredients',
        'instructions',
        'uptoves'
    ];

    protected $attributes = [
        'uptoves' => 0,
    ];
}
