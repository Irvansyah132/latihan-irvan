<!DOCTYPE html>
<html>
<head>
    <title>Latihan</title>
    <style>
        .container {
            margin: 50px;
        }
        .box {
            width: 40px;
            height: 40px;
            display: inline-block;
            border: 2px solid black;
            margin: 2px;
            text-align: center;
            line-height: 40px;
            font-weight: bold;
            font-family: arial;
        }
        .row {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $letters = ['A', 'B', 'C'];
        for ($i = 0; $i < count(value: $letters); $i++){
        echo "<div class='row'>";
        for ($i = 0; $j <= $i; $j++) {
            echo "<div class='box'>{$letters[$i]}</div>";
        }
        echo "</div>";
    }
        ?>
    </div>
</body>
</html>
