<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form-container {
            width: 350px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        .login-form-container h3 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .box {
            margin-bottom: 20px;
            text-align: left;
        }

        .box label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-size: 16px;
        }

        .box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .remember {
            margin-bottom: 20px;
            text-align: left;
        }

        .remember label {
            color: #555;
            font-size: 14px;
            vertical-align: middle;
        }

        .btn button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn button:hover {
            background-color: #45a049;
        }

        .signup-link {
            font-size: 14px;
            color: #333;
        }

        .signup-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-form-container">
    <form>
        <h3>User Login</h3>
        <div class="box">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
        </div>
        <div class="box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <div class="remember">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember me</label>
        </div>
        <div class="btn">
            <button type="submit">Login</button>
        </div>
        <p class="signup-link">Don't have an account? <a href="register.php">Sign up</a></p>
    </form>
</div>

</body>
</html>
