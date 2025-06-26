<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara dan Ibukota ASEAN</title>
</head>
<body>

<?php

$ibukota_asean = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

echo "<h3>Daftar Negara ASEAN dan Ibukota:</h3>";
echo "<ul>";
foreach ($ibukota_asean as $negara => $ibukota) {
    echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>

</body>
</html>

