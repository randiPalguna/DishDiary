<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarked Recipes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .navbar {
            width: 100%;
            background-color: #007BFF;
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            z-index: 1000;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        .container {
            max-width: 800px;
            margin: 80px auto 0;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        img {
            max-width: 100px;
        }
        .btn {
            background-color: #007BFF;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/recipe/bookmark">Bookmarks</a>
            <img src="profile-photo-placeholder.png" alt="Profile" class="profile-photo" style="border-radius: 50%; width: 40px; height: 40px;">
        </div>
        <div class="logout">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-delete">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        <h1>Your Bookmarked Recipes</h1>

        @if($bookmarkedRecipes->isEmpty())
            <p>You have no bookmarked recipes.</p>
        @else
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Ingredients</th>
                    <th>Instructions</th>
                    <th>Upvotes</th>
                    <th>Unbookmark</th>
                </tr>
                @foreach($bookmarkedRecipes as $savedRecipe)
                    <tr>
                        <td>{{ $savedRecipe->id }}</td>
                        <td>{{ $savedRecipe->title }}</td>
                        <td>
                            @if($savedRecipe->image)
                                <img src="{{ asset('storage/' . $savedRecipe->image) }}" alt="{{ $savedRecipe->title }}">
                            @else
                                <p>No image available</p>
                            @endif
                        </td>
                        <td>{{ $savedRecipe->ingredients }}</td>
                        <td>{{ $savedRecipe->instructions }}</td>
                        <td>{{ $savedRecipe->upvotes }}</td>
                        <td>
                            <form action="{{ route('recipe.unbookmark', ['recipe' => $savedRecipe]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Unbookmark</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif

        <div>
            <a href="{{ route('recipe.index') }}">Back to All Recipes</a>
        </div>
    </div>

</body>
</html>
