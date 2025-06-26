<?php
$mahasiswa = [
    [
        "nama" => "Muhammad Irvansyah",
        "email" => "Irvan@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "Irvan.jpg"
    ],
    [
        "nama" => "sipeng",
        "email" => "sipeng@gmail.com",
        "jurusan" => "adap",
        "gambar" => "sipeng.jpg"
    ],
    [
        "nama" => "Paler",
        "email" => "paler@gmail.com",
        "jurusan" => "adap",
        "gambar" => "sipaler.jpg"
    ]
];
?>

<h2>Daftar Mahasiswa</h2>
<?php foreach ($mahasiswa as $mhs) : ?>
    <p>
        <img src="<?= $mhs["gambar"]; ?>" width="50" alt="<?= $mhs["nama"]; ?>">
        <a href="latihansc.php?nama=<?= urlencode($mhs["nama"]); ?>
        &jurusan=<?= urlencode($mhs["jurusan"]); ?>
        &gambar=<?= urlencode($mhs["gambar"]); ?>">
            <?= $mhs["nama"]; ?>
        </a>
    </p>
<?php endforeach; ?>
