<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/layanan.css">
    <title>HelloPets | Layanan Kami</title>
</head>

<body>
    <ul>
        <li>
            <a href="landing-page.php">
                <img class="logo" src="../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="landing-page.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="landing-page.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="layanan.php">
                <h1 class="font">LAYANAN</h1>
            </a></li>
        <li><a class="fitur4" href="dokter.php">
                <h1 class="font">DOKTER</h1>
            </a></li>
        <li class="daftar">
            <a href="registrasi.php">
                <h1 class="daftar">DAFTAR</h1>
            </a>
        </li>
        <li class="masuk">
            <a href="login.php">
                <h1 class="login">MASUK</h1>
            </a>
        </li>
    </ul>
    <div class="header">
        <p class="tulisan">Layanan Kami</p>
        <p class="tulisan2">HelloPets menjadi solusi terbaik bagi anabul anda</p>
        <div class="content">
            <div class="Card">
                <div class="log">
                    <img class="gambar" src="../images/doctor.png" alt="gambar dokter" style="width: 100%;">
                </div>
                <div class="container">
                    <p class="satu">Konsultasi dengan para Dokter Hewan</p>
                    <p class="dua">Konsultasi dari para ahli untuk hewan peliharaan anda - Karena mereka bukan sekedar binatang, Mereka adalah bagian dari keluarga anda.</p>
                </div>
            </div>
            <div class="Card">
                <div class="log">
                    <img class="gambar" src="../images/conversation.png" alt="gambar dokter" style="width: 100%;">
                </div>
                <div class="container">
                    <p class="satu">Pertanyaan terkait hewan peliharaan</p>
                    <p class="dua">Berikan kami pertanyaan-pertanyaan terkait hewan peliharaan, pertanyaan tersebut akan dijawab oleh para ahli.</p>
                </div>
            </div>
            <div class="Card">
                <div class="log">
                    <img class="gambar" src="../images/personal.png" alt="gambar dokter" style="width: 100%;">
                </div>
                <div class="container">
                    <p class="satu">Informasi-informasi terkait anabul</p>
                    <p class="dua">Dapatkan informasi-informasi seputar hewan peliharaan dari para ahli.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <h1 class="semboyan">Butuh Konsultasi...? </br>Silahkan Kontak Kami</br>Kami Siap Membantu</h1>
        <div class="input">
            <h1 class="pertinyi">Ada pertanyaan...?</h1>
            <form action="../controller/pertanyaan.php" method="POST">
                <input name="email" class="email" type="email" placeholder="Masukkan Email anda disini..."></br>
                <input name="tanya" class="pertanyaan" type="text" placeholder="Pertanyaan anda..."></br>
                <input name="masuk" class="button" type="submit" value="Kirim" type="button">
            </form>
        </div>
        <div class="info">
            <h1 class="nama">Kontak</h1>
            <img class="icon" src="../images/map.png" alt="lokasi">
            <p class="ket">Jl. Letnan Tukiyat 20 Condong Catur Yogyakarta Indonesia</p>
            <img class="icon" src="../images/rejected.png" alt="telepon">
            <p class="ket">0814 763 8732</p>
            <img class="icon" src="../images/mail.png" alt="email">
            <p class="ket">Hellopets@gmail.com</p>
        </div>
        <div class="sosmed">
            <h1 class="nama">Sosial Media</h1>
            <p class="ket2">Hellopets@gmail.com</p>
            <img class="icon2" src="../images/ig.png" alt="IG" onclick="">
            <img class="icon2" src="../images/fb.png" alt="FB" onclick="">
            <img class="icon2" src="../images/tw.png" alt="TW" onclick="">
        </div>
    </div>
</body>

</html>