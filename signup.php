<php?
include 'koneksi.php'
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Hash the password before storing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO user (username, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Registration successful! You can now <a href='login.php'>Login</a>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account Page</title>
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
            width: 135%;
            padding: 178px;
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
        <form>
            <input type="text" placeholder="Name" required><br>
            <input type="email" placeholder="Email" required><br>
            <input type="password" placeholder="Password" required><br>
            <button type="submit">LOG IN</button>
        </form>
    </div>
</body>
</html>