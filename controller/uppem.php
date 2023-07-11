<?php
include 'koneksi.php';
$id   = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM pembayaran WHERE id='$id'");
$data = mysqli_fetch_array($sql);
if ($data['status'] == 'no') {
    $query = "UPDATE pembayaran SET status = 'yes' WHERE id='$id'";
    mysqli_query($con, $query);
    // mengalihkan ke halaman index.php
    header("location:../view/dokter/konsul.php");
}