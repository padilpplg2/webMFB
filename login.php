<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    
    <style>
        body {
            font-family: Arial, sans-serif;
            display:flex;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0px;
            background-color: #f0f0f0;
        }

        .login-container {
            width: 100%;
            padding: 150px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 32px;
        }

        .login-container input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }

        .login-container button {
            width: 80%;
            padding: 10px;
            font-size: 18px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #555;
        }

        .login-container a {
            display: block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .login-container .forgot-password {
            color: #ff0000;
            margin-left: 10px;
        }
        .login-container .logo {
            font-weight: bold;
            color: #a15b00;
            font-size: 30px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo">MFB</div>
        <h1>WELCOME!!</h1>
        <h2>please sign in before shopping</h2>
        <form>
            <input type="email" placeholder="Email" required><br>
            <input type="password" placeholder="Password" required><br>
            <a href="#" class="forgot-password">Forgot password??</a><br>
           <a href="http://localhost:8080/web_MFB/tampilan.php"> <button type="submit">LOG IN</button></a>
        </form>
        <a href="http://localhost:8080/web_MFB/signup.php">don't have account? <span>Sign Up</span></a>
    </div>

    
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>