<!DOCTYPE html>
<html>
<head>
    <title>Tugas 1 - Deteksi Bilangan</title>
</head>
<body>
    <h2>Pengulangan untuk mencari kategori bilangan:</h2>

    <?php
    function isPrima(int $angka): bool {
        if ($angka < 2) return false;

        for ($i = 2; $i <= sqrt($angka); $i++) {
            if ($angka % $i == 0) {
                return false;
            }
        }
        return true;
    }

    for ($i = 1; $i <= 20; $i++) {
        $output = "Angka $i adalah";

        if ($i % 2 == 0) {
            $output .= " bilangan genap";
        } else {
            $output .= " bilangan ganjil";
        }

        if (isPrima($i)) {
            $output .= " sekaligus bilangan prima";
        }

        echo "<p>$output</p>";
    }
    ?>
</body>
</html>
