<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>

<?php

$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "<h3>Daftar Negara ASEAN awal:</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

$negara_asean[] = "Laos";
$negara_asean[] = "Filipina";
$negara_asean[] = "Myanmar";

echo "<h3>Daftar Negara ASEAN baru:</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

</body>
</html>

