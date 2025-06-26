<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            margin-bottom: 20px;
        }

        .logout {
            padding: 10px 20px;
            background-color: #ff4d4d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .logout:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Selamat Datang, Admin</h2>
        <p>Ini adalah halaman admin</p>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>

