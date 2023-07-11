<?php

//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';

//mengecek apakah form disubmit atau tidak
if (isset($_POST['masuk'])) {
    // menghilangkan backshlases
    $email = stripslashes($_POST['email']);
    //cara sederhana mengamankan dari sql injection
    $email = mysqli_real_escape_string($con, $email);
    // menghilangkan backshlases
    $password = stripslashes($_POST['password']);
    //cara sederhana mengamankan dari sql injection
    $password = mysqli_real_escape_string($con, $password);

    // berfungsi menyeleksi data user dengan username dan password yang sesuai
    $sql = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'");
    //berfungsi menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($sql);

    $dok = mysqli_query($con, "SELECT * FROM dokter WHERE email='$email' AND password='$password'");
    $cek2 = mysqli_num_rows($dok);

    // berfungsi mengecek apakah username dan password ada pada database
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($sql);

        // berfungsi mengecek jika user login sebagai admin
        if ($data['status'] == "admin") {
            // berfungsi membuat session
            $_SESSION['unique'] =  $data['unique_id'];
            $_SESSION['user'] =  $data['id_user'];
            $_SESSION['status'] = "admin";
            //berfungsi mengalihkan ke halaman admin
            header("location: ../view/admin/halaman-admin.php");
            // berfungsi mengecek jika user login sebagai moderator
        } elseif ($data['status'] == "user") {
            // berfungsi membuat session
            $_SESSION['unique'] =  $data['unique_id'];
            $_SESSION['user'] = $data['id_user'];
            $_SESSION['status'] = "user";
            // berfungsi mengalihkan ke halaman moderator
            header("location: ../view/user/halaman-user.php");
        } else {
            // berfungsi mengalihkan alihkan ke halaman login kembali
            $message = "Data anda tidak Terdaftar!!";
            echo "<script type='text/javascript'>alert('$message');
                    window.location.href='../view/login.php';</script>";
        }
    } elseif($cek2 > 0) {
        $data = mysqli_fetch_assoc($dok);
        // berfungsi membuat session
        $_SESSION['dokter'] = $data['id_dokter'];
        $_SESSION['status'] = "dokter";
        // berfungsi mengalihkan ke halaman moderator
        header("location: ../view/dokter/halaman-dokter.php");
    } else {
        $message = "Data anda tidak Terdaftar!!";
        echo "<script type='text/javascript'>alert('$message');
                    window.location.href='../view/login.php';</script>";
    }
}
