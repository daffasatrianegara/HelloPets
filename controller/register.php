<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if (isset($_POST['validasi'])) {
    if (isset($_POST['register'])) {
        // menghilangkan backshlases
        $nama = stripslashes($_POST['nama']);
        //cara sederhana mengamankan dari sql injection
        $nama = mysqli_real_escape_string($con, $nama);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $hp     = stripslashes($_POST['hp']);
        $hp     = mysqli_real_escape_string($con, $hp);
        $ran_id = rand(time(), 100000000);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if (!empty(trim($nama)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($hp))) {
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
            if (cek_email($email, $con) == 0) {
                //hashing password sebelum disimpan didatabase
                $pass  = password_hash($password, PASSWORD_DEFAULT);
                //insert data ke database
                $query = "INSERT INTO user (unique_id ,nama , email, password, passmd5, telepon) VALUES ('$ran_id', '$nama','$email','$password', '$pass', '$hp')";
                $result   = mysqli_query($con, $query);
                //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                if ($result) {
                    $_SESSION['nama'] = $nama;
                    $message = "data anda berhasil didaftarkan!!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='../view/login.php';</script>";
                    //jika gagal maka akan menampilkan pesan error
                } else {
                    $message = "data anda tidak dapat didaftarkan!!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='../view/registrasi.php';</script>";
                }
            } else {
                $message = "Email yang anda masukkan sudah digunakan!!";
                echo "<script type='text/javascript'>alert('$message');
                window.location.href='../view/registrasi.php';</script>";
                
            }
        } else {
            $message = "Data tidak boleh kosong!!";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../view/registrasi.php';</script>";
        }
    } else {
        $message = "Data tidak boleh Kosong!!";
        echo "<script type='text/javascript'>alert('$message');
        window.location.href='../view/registrasi.php';</script>";
    }
} else {
    $message = "Data tidak boleh Kosong!!";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='../view/registrasi.php';</script>";
}
//fungsi untuk mengecek username apakah sudah terdaftar atau belum
function cek_email($email, $con)
{
    $email = mysqli_real_escape_string($con, $email);
    $query = "SELECT * FROM user WHERE email = '$email'";
    if ($result = mysqli_query($con, $query)) return mysqli_num_rows($result);
}
