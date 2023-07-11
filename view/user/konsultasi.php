<?php
require_once("./../../controller/auth.php");
include './../../controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM user WHERE id_user = '" . $_SESSION['user'] . "' ");
$d = mysqli_fetch_object($query);
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id_user = '" . $_SESSION['user'] . "' "));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../CSS/konsultasi.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HelloPets | akun saya</title>
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
    <h1 class="ket1">LINK KONSULTASI :</h1>
    <?php
    $query1 = mysqli_query($con, "SELECT * FROM konsultasi WHERE nama_user = '$d->nama' ");
    $d1 = mysqli_fetch_object($query1);
    ?>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Link</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from konsultasi WHERE status = 'yes'
            AND nama_user = '$d->nama'");
            foreach ($users as $row) {
                echo "<tr>
                <td><a href='" . $row['link'] . "' target='_blank'>" . $row['link'] . "</a></td>
      </tr>";
            } ?>
        </table>
    </div>
    <h1 class="ket1">DATA KONSULTASI :</h1>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Nomor</td>
                <td>Email Dokter</td>
                <td>Nama Hewan</td>
                <td>Keluhan</td>
                <td>Penyakit</td>
                <td>Solusi</td>
                <td>Obat</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from hasilk WHERE email_user = '$d->email'");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['email_dokter'] . "</td>
    <td>" . $row['jenis'] . "</td>
    <td>" . $row['keluhan'] . "</td>
    <td>" . $row['penyakit'] . "</td>
    <td>" . $row['solusi'] . "</td>
    <td>" . $row['obat'] . "</td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>