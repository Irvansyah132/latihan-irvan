<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modul 2- latihan 1</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            display: inline-block;
            margin: 2px;
        }
        .clear {
            display: block;
        }
        
    </style>
</head>
<body>
    
    <?php
    $baris = 5;
    for ($i = 1; $i <= $baris; $i++) {
        for ($j = 1; $j <= $i; $j++) {
        echo "<div class='kotak'>$j</div>";
    }
    echo "<div class='clear'></div>";
}
    ?>
</body>
</html>
