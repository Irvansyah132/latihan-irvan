<!DOCTYPE html>
<html>
<head>
    <title>Latihan 5D</title>
</head>
<body>

<h3>Masukkan angka:</h3>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="number" name="angka" required>
    <button type="submit">Tampilkan!</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["angka"])) {
    $angka = (int)$_POST["angka"];

    echo "<h4>Output</h4>";

    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
}
?>

</body>
</html>
