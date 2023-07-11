<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id   = $_GET['id_pertanyaan'];
$sql = mysqli_query($con, "SELECT * FROM pertanyaan WHERE id_pertanyaan='$id'");
$data = mysqli_fetch_array($sql);
// query SQL untuk insert data
if ($data['status'] == 'no') {
    $query = "UPDATE pertanyaan SET status = 'yes' WHERE id_pertanyaan='$id'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/admin/datatanya.php");
} elseif ($data['status'] == 'yes') {
    $query = "UPDATE pertanyaan SET status = 'no' WHERE id_pertanyaan='$id'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/admin/datatanya.php");
}
