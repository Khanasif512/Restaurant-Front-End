<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .register-form-container {
            width: 350px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }

        .register-form-container h3 {
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

        .login-link {
            font-size: 14px;
            color: #333;
        }

        .login-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-form-container">
    <form>
        <h3>User Registration</h3>
        <div class="box">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your desired username">
        </div>
        <div class="box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address">
        </div>
        <div class="box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <div class="box">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password">
        </div>
        <div class="btn">
            <button type="submit">Register</button>
        </div>
        <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
    </form>
</div>

</body>
</html>
