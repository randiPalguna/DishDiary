<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Recipe</title>
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
            color: #2c5d34; /* Dark green for headers */
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600; /* Bold labels */
        }
        input[type="text"], input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #6db65d; /* Earthy green */
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #5aa94e; /* Darker green on hover */
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
        <h1>Create a Recipe</h1>
        <form method="post" action="{{ route('recipe.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" required />
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" />
            </div>
            <div>
                <label>Ingredients</label>
                <input type="text" name="ingredients" required />
            </div>
            <div>
                <label>Instructions</label>
                <input type="text" name="instructions" required />
            </div>
            <div>
                <input type="submit" value="Save a New Recipe" />
            </div>
        </form>
    </div>

</body>
</html>
