<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: admin.php");
    exit;
}

$error = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "123") {
        $_SESSION["login"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('data:image/jpeg;base64,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');
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(242, 236, 236, 0.2);
            width: 300px;
            text-align: center;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color:rgb(255, 0, 0);
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <?php if ($error): ?>
            <div class="error">Username atau Password salah!</div>
        <?php endif; ?>
    </div>
</body>
</html>

