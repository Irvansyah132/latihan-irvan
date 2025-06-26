<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3c - Fungsi Pangkat</title>
</head>
<body>

<?php
function pangkat($angka, $pangkat) {
    return pow($angka, $pangkat);
}

$angka = 5;
$pangkatnya = 4;
$hasil = pangkat($angka, $pangkatnya);

echo "$angka pangkat $pangkatnya = $hasil";
?>

</body>
</html>
