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

$angka = 14;
$hasil = faktorial($angka);

echo "Faktorial dari $angka = $hasil";
?>

</body>
</html>
