<?php
require_once("./../../controller/auth.php"); 
include './../../controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM user WHERE id_user = '".$_SESSION['user']."' ");
    $d = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/user.css">
    <title>HelloPets | Home</title>
</head>

<body>
    <ul>
        <li>
            <a href="halaman-user.php">
                <img class="logo" src="../../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="halaman-user.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="halaman-user.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="caridok.php">
                <h1 class="font">CARI DOKTER</h1>
            </a></li>
        <li><a class="fitur4" href="konsultasi.php">
                <h1 class="font">KONSULTASI</h1>
            </a></li>
        <li class="daftar">
            <a href="profil.php">
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
        <img class="dokter" src="../../images/user.jpg" alt="dokter" />
        <h1 class="semboyan">Selamat datang di website HelloPets.</h1>
        <h2 class="inggris">Terima kasih telah mendaftarkan akun disini.</h2>
        <a class="tombol3" href="caridok.php">
            <h1 class="tombol2" href="caridok.php" onclick="">Mulai Konsultasi</h1>
        </a>
    </nav>
    <div class="footer">
        <h1 class="semboyan2">Butuh Konsultasi...? </br>Silahkan Kontak Kami</br>Kami Siap Membantu</h1>
        <div class="input">
            <h1 class="pertinyi">Ada pertanyaan...?</h1>
            <form action="./../../controller/pertanyaan2.php" method="POST">
                <input name="email" class="email" type="email" value="<?php echo $d->email ?>" readonly></br>
                <input name="tanya" class="pertanyaan" type="text" placeholder="Pertanyaan anda..."></br>
                <input name="masuk" class="button" type="submit" value="Kirim">
            </form>
        </div>
        <div class="info">
            <h1 class="nama">Kontak</h1>
            <img class="icon" src="../../images/map.png" alt="lokasi">
            <p class="ket">Jl. Letnan Tukiyat 20 Condong Catur Yogyakarta Indonesia</p>
            <img class="icon" src="../../images/rejected.png" alt="telepon">
            <p class="ket">0814 763 8732</p>
            <img class="icon" src="../../images/mail.png" alt="email">
            <p class="ket">Hellopets@gmail.com</p>
        </div>
        <div class="sosmed">
            <h1 class="nama">Sosial Media</h1>
            <p class="ket2">Hellopets@gmail.com</p>
            <img class="icon2" src="../../images/ig.png" alt="IG" onclick="">
            <img class="icon2" src="../../images/fb.png" alt="FB" onclick="">
            <img class="icon2" src="../../images/tw.png" alt="TW" onclick="">
        </div>
    </div>
    <script>
        function f1() {
            console.log("running");
            open("landing-page.php");
        }
    </script>
</body>

</html>