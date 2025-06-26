<!DOCTYPE html>
<html>
<head>
    <title>Negara ASEAN - Array Multidimensi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>

<?php

$asean = array(
    array("negara" => "Indonesia", "ibukota" => "D.K.I. Jakarta", "kode" => "+62"),
    array("negara" => "Singapura", "ibukota" => "Singapura", "kode" => "+65"),
    array("negara" => "Malaysia", "ibukota" => "Kuala Lumpur", "kode" => "+60"),
    array("negara" => "Brunei", "ibukota" => "Bandar Seri Begawan", "kode" => "+673"),
    array("negara" => "Thailand", "ibukota" => "Bangkok", "kode" => "+66"),
    array("negara" => "Laos", "ibukota" => "Vientiane", "kode" => "+856"),
    array("negara" => "Filipina", "ibukota" => "Manila", "kode" => "+63"),
    array("negara" => "Myanmar", "ibukota" => "Naypyidaw", "kode" => "+95")
);

echo "<h3>Daftar Negara ASEAN dan Informasi Lainnya</h3>";
echo "<table>";
echo "<tr><th>Negara</th><th>Ibukota</th><th>Kode Telepon</th></tr>";

foreach ($asean as $data) {
    echo "<tr>";
    echo "<td>{$data['negara']}</td>";
    echo "<td>{$data['ibukota']}</td>";
    echo "<td>{$data['kode']}</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

