<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmarked Recipes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e6f7e5; /* Soft green background */
            color: #4a4a4a; /* Dark gray text */
            padding: 20px;
        }
        .navbar {
            width: 100%;
            background-color: #8fbc8f; /* Light green for navbar */
            padding: 10px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            z-index: 1000;
            border-radius: 0 0 10px 10px; /* Rounded bottom corners */
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
            color: #2c5d34; /* Dark green for headers */
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
            background-color: #8fbc8f; /* Navbar color for headers */
            color: white;
        }
        img {
            max-width: 100px;
            border-radius: 5px; /* Slightly rounded corners for images */
        }
        .btn {
            background-color: #6db65d; /* Earthy green */
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #5aa94e; /* Darker green on hover */
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007BFF; /* Blue for link */
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="navbar">
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/recipe/bookmark">Bookmarks</a>
        </div>
        <div class="profile-logout">
            <img src="profile-photo-placeholder.png" alt="Profile" class="profile-photo">
            <div class="logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-delete">Logout</button>
                </form>
            </div>
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

        <a href="{{ route('recipe.index') }}" class="back-link">Back to All Recipes</a>
    </div>

</body>
</html>
