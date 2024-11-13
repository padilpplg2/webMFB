<?php
session_start(); // Mulai sesi

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('koneksi.php'); 
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // meriksa email dan password
    $stmt = $koneksi->prepare("SELECT password, role FROM user WHERE email = ?"); // ngambil role
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password, $role);
        $stmt->fetch();

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['email'] = $email; // Simpan email dalam sesi
            $_SESSION['role'] = $role; // Simpan role dalam sesi
            

            
            // Arahkan berdasarkan role
            if ($role === 'admin') {
                header('Location: admin.php'); //ke halaman admin
            } else {
                header('Location: tampilan.php'); //ke halaman utama
            }
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Email tidak ditemukan!";
    }

    $stmt->close();
    $koneksi->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    
    <style>
        body {
            font-family: sans-serif;
            display: flex;
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

        .error-message {
            color: red;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="logo">MFB</div>
        <b><h1>WELCOME!!</h1></b>
        <h2>please sign in before shopping</h2>
        <?php if (isset($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <a href="#" class="forgot-password">Forgot password??</a><br>
            <button type="submit">LOG IN</button>
        </form>
        <a href="signup.php">don't have account? <span>Sign Up</span></a>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
