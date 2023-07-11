<?php
include 'koneksi.php';
if (isset($_POST['ubah_data'])) {

    $nama   = $_POST['nama'];
    $email   = $_POST['email'];
    $telepon     = $_POST['telepon'];

    $update = mysqli_query($con, "UPDATE user SET
                        nama = '" . $nama . "',
                        email = '" . $email . "',
                        telepon = '" . $telepon . "'
                        WHERE id_user = '" . $d->id . "' ");

    if ($update) {  
        $message = "Data anda berhasil diubah!!";
        echo "<script type='text/javascript'>alert('$message');
    window.location.href='../view/user/profil.php';</script>";
    } else {
        $message = "Data anda Gagal diubah!!";
        echo "<script type='text/javascript'>alert('$message');
    window.location.href='../view/user/profil.php';</script>";
    }
}
?>