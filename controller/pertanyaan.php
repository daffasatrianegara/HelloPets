<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if (isset($_POST['masuk'])) {
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $pertanyaan = stripslashes($_POST['tanya']);
    $pertanyaan = mysqli_real_escape_string($con, $pertanyaan);

    if (!empty(trim($email)) && !empty(trim($pertanyaan))) {
        $query = "INSERT INTO pertanyaan (email, isi) VALUES ('$email','$pertanyaan')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            $message = "Pertanyaan anda terkirim!!";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../view/layanan.php';</script>";
            //jika gagal maka akan menampilkan pesan error
        } else {
            $message = "data anda tidak dapat didaftarkan!!";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../view/layanan.php';</script>";
        }
    } else {
        $message = "Email dan Pertanyaan tidak boleh kosong";
        echo "<script type='text/javascript'>alert('$message');
            window.location.href='../view/layanan.php';</script>";
    }
} $message = "pencet tombolnya!!";
echo "<script type='text/javascript'>alert('$message');
window.location.href='../view/layanan.php';</script>";
