<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarked Recipes</title>
</head>
<body>
    <h1>Your Bookmarked Recipes</h1>

    @if($bookmarkedRecipes->isEmpty())
        <p>You have no bookmarked recipes.</p>
    @else
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th>Ingredients</th>
                <th>Instructions</th>
                <th>Uptoves</th>
                <th>Unbookmark</th>
            </tr>
            @foreach($bookmarkedRecipes as $savedRecipe)
                <tr>
                    <td>{{ $savedRecipe->id }}</td>
                    <td>{{ $savedRecipe->title }}</td>
                    <td><img src="{{ $savedRecipe->image }}" alt="{{ $savedRecipe->title }}" width="100"></td>
                    <td>{{ $savedRecipe->ingredients }}</td>
                    <td>{{ $savedRecipe->instructions }}</td>
                    <td>{{ $savedRecipe->uptoves }}</td>
                    <td>
                        <form action="{{ route('recipe.unbookmark', ['recipe' => $savedRecipe]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Unbookmark</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

    <div>
        <a href="{{ route('recipe.index') }}">Back to All Recipes</a>
    </div>
</body>
</html>
