<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dokter.css">
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
        <li><a class="fitur4" href="">
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
    <div class="semboyan">
        <h1 class="rekom">Rekomendasi Dokter Untuk Mu</h1>
    </div>
    <div class="content">
        <?php
        include '../controller/koneksi.php';
        $hasil = mysqli_query($con, "SELECT * FROM dokter");
        $jumlah = mysqli_num_rows($hasil);
        $urut = 0;
        while ($row = mysqli_fetch_array($hasil)) {
            $id = $row["id_dokter"];
            $foto = $row["foto"];
            $gelar = $row["gelar"];
            $nama = $row["nama"];
            $ket = $row["ket"];
            $bio = $row["bio"];
            $jadwal = $row["jadwal_operasional"];
            $jam = $row["jam_operasional"];
        ?>
            <div class="card">
                <a class="link" href="login.php" style="text-decoration: none;">
                    <div class="log">
                        <img class="gambar" src="img/<?php echo $foto ?>" alt="" style="width: 100%;">
                    </div>
                    <div class="container">
                        <p class="nama"><?php echo $gelar ?> <?php echo $nama; ?></p>
                        <p class="satu"><?php echo $ket ?></p>
                        <p class="dua"><?php echo $bio ?></p>
                        <p class="tiga"><?php echo $jadwal ?></p>
                        <p class="empat"><?php echo $jam ?></p>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</body>

</html>