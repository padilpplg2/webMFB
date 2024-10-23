<?php

if (isset($_POST['register'])) {
    include('koneksi.php');
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare statement
    $stmt = $koneksi->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    // Execute statement and check for errors
    if ($stmt->execute()) {
        header('Location: login.php');
        exit; // Pastikan untuk menghentikan eksekusi lebih lanjut
    } else {
        echo "Error: " . $stmt->error; // Menampilkan pesan error
        header('Location: signup.php');
        exit; // Pastikan untuk menghentikan eksekusi lebih lanjut
    }

    // Close statement and connection
    $stmt->close();
    $koneksi->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account Page</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 95vh;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .create-account-container {
            width: 100%;
            padding: 100px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .create-account-container h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        .create-account-container p {
            margin-bottom: 20px;
            font-size: 18px;
        }
        .create-account-container input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
        }
        .create-account-container button {
            width: 80%;
            padding: 10px;
            font-size: 18px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
        .create-account-container button:hover {
            background-color: #555;
        }
        .create-account-container .checkbox-label {
            font-size: 14px;
            display: flex;
            justify-content: start;
            margin-left: 10%;
        }
        .create-account-container .logo {
            font-weight: bold;
            color: #a15b00;
            font-size: 30px;
        }
    </style>
</head>
<body>

    <div class="create-account-container">
        <div class="logo">MFB</div>
        <h1>Create Your Account</h1>
        <p>Enter your details!</p>
        <form action="signup.php" method="POST">
            <input type="text" name="username" placeholder="Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="register" value="register">REGISTER</button>
        </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
