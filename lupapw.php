<php?
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
            height: 80vh;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .create-account-container {
            width: 149%;
            padding: 185px;
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
        <h1>Lupa Password???</h1>
        <p>Silahkan buat password baru</p>
        <form>
            <input type="text" placeholder="Name" required><br>
            <input type="email" placeholder="Email" required><br>
            <input type="password" placeholder="Password" required><br>
            <button type="submit">LOG IN</button>
        </form>
    </div>
</body>
</html>