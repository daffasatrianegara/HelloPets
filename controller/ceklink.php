<?php

require('koneksi.php');
if (isset($_POST['submit'])) {
    $link = $_POST['link'];
    $user = $_GET['nama_user'];
    $update = "UPDATE konsultasi SET link='$link', status='yes' WHERE nama_user='$user'";
    mysqli_query($con, $update);
    header("location:../view/dokter/hasil.php?nama_user=$user");
}
