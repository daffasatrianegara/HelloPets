<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/landing.css">
    <title>HelloPets</title>
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
    <nav class="konten">
        <img class="dokter" src="../images/landing.jpg" alt="dokter" />
        <h1 class="semboyan">Membantu Temukan Solusi Untuk Anabul.</h1>
        <h2 class="inggris">Ensuring the healt and happiness of your furry friends with expert care.</h2>
        <a class="tombol3" href="login.php"><h1 class="tombol2" href="login.php" onclick="">Konsultasi Hewan</h1></a>
    </nav>
    <div></div>
    <script>
        function f1() {
            console.log("running");
            open("landing-page.php");
        }
    </script>
</body>

</html>