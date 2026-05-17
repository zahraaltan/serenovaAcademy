<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "serenova_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = 1;
        header("Location: index.php");
        exit();
    } else {
        echo "Wrong username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            background: #7a5c34;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: sans-serif;
        }

        .card {
            background: rgba(0,0,0,0.2);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 12px;
            padding: 2.5rem 2rem;
            width: 320px;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        h1 {
            color: white;
            font-size: 1.4rem;
            font-weight: 600;
        }

        label {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
            color: rgba(255,255,255,0.8);
            font-size: 0.85rem;
        }

        input {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.25);
            border-radius: 8px;
            height: 2.6rem;
            padding: 0 0.75rem;
            color: white;
            font-size: 0.95rem;
            outline: none;
            transition: border-color 0.2s;
        }

        input::placeholder { color: rgba(255,255,255,0.4); }
        input:focus { border-color: rgba(255,255,255,0.6); }

        button {
            margin-top: 0.4rem;
            height: 3rem;
            width: 5rem;
            background: #a0763f;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            cursor: pointer;
            transition: background 0.2s;
        }

        button:hover { background: #b8874a; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Log In</h1>
        <form method="POST" action="login.php">
        <label>
            Full Name
            <input name="username" type="text" placeholder="Your name">
        </label>
        <label>
            Password
            <input name="password" type="password" placeholder="••••••••">
        </label>
        <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>