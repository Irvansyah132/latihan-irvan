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
        "gambar" => "paler.jpg"
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
<?php
$nama = $_GET["nama"];
$email = $_GET["email"];
$jurusan = $_GET["jurusan"];
$gambar = $_GET["gambar"];
?>

<h3>profil Mahasiswa</h3>
<img src="<?= $gambar; ?>" width="100">
<p><strong><?= $nama;?></strong></p>
<p><?= $email; ?></p>
<p><?= $jurusan;?></p>
<a href="latihan5b.php">kembali</a>

