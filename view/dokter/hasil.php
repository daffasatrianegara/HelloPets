<?php
include './../../controller/koneksi.php';
require_once("./../../controller/authdok.php");
$user = $_GET['nama_user'];
$query = mysqli_query($con, "SELECT * FROM user WHERE nama = '$user' ");
$d = mysqli_fetch_object($query);
$query = mysqli_query($con, "SELECT * FROM dokter WHERE id_dokter = '" . $_SESSION['dokter'] . "' ");
$data = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/hasil.css">
    <title>Identifikasi</title>
</head>

<body>
    <h1 class="ket">Hasil Konsultasi</h1>
    <form action="./../../controller/cekhasil.php" method="POST">
        <div class="form">
            <input name="dokter" class="jenis" type="text" placeholder="email dokter" value="<?php echo $data->email ?>" readonly>
            <input name="user" class="jenis" type="text" placeholder="email user" value="<?php echo $d->email ?>" readonly>
            <input name="jenis" class="jenis" type="text" placeholder="nama hewan">
            <input name="keluhan" class="keluhan" type="text" placeholder="keluhan">
            <input name="penyakit" class="penyakit" type="text" placeholder="penyakit yang diderita">
            <textarea name="solusi" class="solusi" type="text" placeholder="solusi/saran"></textarea>
            <input name="obat" class="obat" type="text" placeholder="obat">
            <input name="selesai" class="selesai" type="submit" value="Selesai">
        </div>
    </form>
</body>

</html>