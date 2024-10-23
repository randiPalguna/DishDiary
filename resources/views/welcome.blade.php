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
            background: linear-gradient(to right, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .container:hover {
            transform: translateY(-10px);
        }
        h1 {
            font-size: 2.2rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #333;
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
            h1 {
                font-size: 1.8rem;
            }
            .btn {
                padding: 10px 25px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Login to Your Account</h1>
        <p>
            <a href="/login" class="btn">Login</a>
        </p>
        <div class="form-footer">
            <p>Don't have an account? <a href="/register">Register</a></p>
        </div>
    </div>

</body>
</html>
