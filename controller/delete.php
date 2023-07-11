<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id_user'];
$id2   = $_GET['id_dokter'];
$id3   = $_GET['id_pertanyaan'];
$id4   = $_GET['id'];
// query SQL untuk insert data
if ($id != NULL) {
    $query = "DELETE from user where id_user='$id'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/admin/datauser.php");
} elseif($id2 != NULL) {
    $query = "DELETE from dokter where id_dokter='$id2'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/admin/datadok.php");
} elseif($id3 != NULL) {
    $query = "DELETE from pertanyaan where id_pertanyaan='$id3'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/admin/datatanya.php");
} elseif($id4 != NULL) {
    $query = "DELETE from pembayaran where id='$id4'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/dokter/konsul.php");
}
