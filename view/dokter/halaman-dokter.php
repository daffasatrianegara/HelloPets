<?php require_once("./../../controller/authdok.php");
include './../../controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM dokter WHERE id_dokter = '" . $_SESSION['dokter'] . "' ");
$d = mysqli_fetch_object($query);
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM dokter WHERE id_dokter = '" . $_SESSION['dokter'] . "' "));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/halamandok.css">
    <title>HelloPets | Home</title>
</head>
<body>
<ul>
        <li>
            <a href="halaman-dokter.php">
                <img class="logo" src="../../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="halaman-dokter.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="halaman-dokter.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="pertanyaan.php">
                <h1 class="font">PERTANYAAN</h1>
            </a></li>
        <li><a class="fitur4" href="konsul.php">
                <h1 class="font">KONSULTASI</h1>
            </a></li>
        <li class="daftar">
            <a href="profildok.php">
                <h1 class="daftar">PROFIL</h1>
            </a>
        </li>
        <li class="masuk">
            <a href="../../controller/logout.php">
                <h1 class="login">LOGOUT</h1>
            </a>
        </li>
    </ul>
     <nav class="konten">
        <img class="dokter" src="../../images/dokter.jpg" alt="dokter" />
        <h1 class="semboyan">Selamat datang di website HelloPets.</h1>
        <h2 class="inggris">Terima kasih telah memberikan konsultasi.</h2>
    </nav>
</body>
</html>