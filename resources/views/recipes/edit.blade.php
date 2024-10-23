<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recipe</title>
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
            max-width: 600px;
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
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
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
        <h1>Edit a Recipe</h1>
        <form method="post" action="{{ route('recipe.update', ['recipe' => $recipe]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label>Title</label>
                <input type="text" name="title" value="{{ $recipe->title }}" required />
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" />
                @if($recipe->image)
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="Recipe Image" width="100">
                @endif
            </div>
            <div>
                <label>Ingredients</label>
                <input type="text" name="ingredients" value="{{ $recipe->ingredients }}" required />
            </div>
            <div>
                <label>Instructions</label>
                <input type="text" name="instructions" value="{{ $recipe->instructions }}" required />
            </div>
            <div>
                <input type="submit" value="Update" />
            </div>
        </form>
    </div>

</body>
</html>
