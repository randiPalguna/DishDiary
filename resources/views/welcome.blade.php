<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Our Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: row;
            overflow: hidden;
        }
        .image-container {
            flex: 1;
            background-image: url('https://github.com/randiPalguna/DishDiary/blob/main/resources/images/berserk.jpeg'); /* Add your background image URL */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the image */
            display: flex;
            justify-content: center;
            align-items: center;
            filter: brightness(0.8); /* Darken image slightly for contrast */
        }
        .login-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(215, 182, 136, 0.9); /* Semi-transparent brown */
            padding: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            flex-direction: column; /* Stack elements vertically */
            height: 100%; /* Full height */
            color: #333; /* Text color */
            text-align: center; /* Center text */
        }
        /* Styles for the login content */
        h1 {
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 10px; /* Reduced margin */
            color: #333; /* Text color */
        }
        h2 {
            font-size: 1.4rem; /* Smaller heading */
            margin-bottom: 30px; /* Space between h2 and button */
            color: #333; /* Text color */
        }
        p {
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #6c5ce7;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 500;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .btn:hover {
            background-color: #5e3ae6;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }
        .form-footer {
            margin-top: 30px;
        }
        a {
            color: #6c5ce7;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s;
        }
        a:hover {
            color: #4b23dd;
        }
        @media (max-width: 768px) {
            body {
                flex-direction: column; /* Change to column layout */
                height: 100vh; /* Full height */
            }
            .image-container {
                height: 0%; /* Adjust the height as needed */
                width: 0%;
            }
            .login-container {
                flex: 1; /* Allow it to take up the remaining space */
                justify-content: center; /* Center content */
                align-items: center; /* Center content */
                height: 100%; /* Ensure it fills half of the screen */
                padding: 200px; /* Ensure padding */
            }
        }
    </style>
</head>
<body>

    <div class="image-container">
        <!-- Background is now an image -->
    </div>

    <div class="login-container">
        <div class="container">
            <h1>Dish Diary</h1>
            <h2>Cook dishes of your dreams</h2>
            <p>
                <a href="/login" class="btn">Login</a>
            </p>
            <div class="form-footer">
                <p>Don't have an account? <a href="/register">Register</a></p>
            </div>
        </div>
    </div>

</body>
</html>
