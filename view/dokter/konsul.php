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
    <link rel="stylesheet" href="../../CSS/dokon.css">
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
    <h1 class="ket1">DATA PEMBAYARAN</h1>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Nomor</td>
                <td>Nama User</td>
                <td>Biaya</td>
                <td>Status</td>
                <td>Aksi</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from pembayaran WHERE status = 'no'
            AND nama_dokter = '$d->nama'");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['nama_user'] . "</td>
    <td>" . $row['biaya'] . "</td>
    <td>" . $row['status'] . "</td>
    <td>
    <a href='link.php?nama_user=$row[nama_user]'>ACC</a>
    <a href='./../../controller/uppem.php?id=$row[id]'>Selesai</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
    <h1 class="ket1">KONSULTASI SELESAI</h1>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Nomor</td>
                <td>Nama User</td>
                <td>Biaya</td>
                <td>Status</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from pembayaran WHERE status = 'yes'
            AND nama_dokter = '$d->nama'");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['nama_user'] . "</td>
    <td>" . $row['biaya'] . "</td>
    <td>" . $row['status'] . "</td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>