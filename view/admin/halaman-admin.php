<?php require_once("./../../controller/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/halamanad.css">
    <title>HelloPets | Admin</title>
</head>

<body>
    <ul>
        <li>
            <a href="halaman-admin.php">
                <img class="logo" src="../../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="halaman-admin.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="halaman-admin.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="datauser.php">
                <h1 class="font">DATA USER</h1>
            </a></li>
        <li><a class="fitur2" href="datadok.php">
                <h1 class="font">DATA DOKTER</h1>
            </a></li>
        <li><a class="fitur2" href="datatanya.php">
                <h1 class="font">PERTANYAAN</h1>
            </a></li>
        <li class="fitur4">
            <a href="datakonsul.php">
                <h1 class="daftar">DATA KONSULTASI</h1>
            </a>
        </li>
        <li class="masuk">
            <a href="../../controller/logout.php">
                <h1 class="login">LOGOUT</h1>
            </a>
        </li>
    </ul>
    <nav class="konten">
        <img class="dokter" src="../../images/admin.jpg" alt="dokter" />
        <h1 class="semboyan">Selamat datang Admin HelloPets.</h1>
        <h2 class="inggris">Selamat mengelola data.</h2>
    </nav>
</body>

</html>