<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3a - Ganti Style</title>
    <style>
        .ganti-style {
            font-size: 28px;
            font-family: Arial, sans-serif;
            color: #1A0547;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
function ganti_style($tulisan, $kelas) {
    return "<p class='$kelas'>$tulisan</p>";
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>

</body>
</html>

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
















<!DOCTYPE html>
<html>
<head>
    <title>Latihan 3d - Fungsi Faktorial</title>
</head>
<body>

<?php
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

$angka = 5;
$hasil = faktorial($angka);

echo "Faktorial dari $angka = $hasil";
?>

</body>
</html>

