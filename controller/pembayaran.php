<?php
require_once("auth.php");
include 'koneksi.php';

$query = mysqli_query($con, "SELECT * FROM user WHERE id_user = '" . $_SESSION['user'] . "' ");
$d = mysqli_fetch_object($query);

$id_dokter = $_GET['id_dokter'];
$sql = mysqli_query($con, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
$data = mysqli_fetch_object($sql);

if (isset($_POST['bayar'])) {
    $q = "INSERT INTO pembayaran (nama_dokter, nama_user, biaya, norek) VALUES
    ('$data->nama', '$d->nama', '$data->harga', '$data->norek')";
    $r = mysqli_query($con, $q);
    $w = "INSERT INTO konsultasi (nama_user, nama_dokter) VALUES
    ('$d->nama', '$data->nama')";
    $x = mysqli_query($con, $w);
    if ($r && $w) {
        $message = "pembayaran berhasil, tunggu konfirmasi dokter";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='../view/user/konsultasi.php';</script>";
    } else {
        echo "<script>alert('Pembayaran gagal');</script>";
    }
}
