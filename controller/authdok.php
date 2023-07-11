<?php
//inisialisasi session
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['dokter'])) {
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: ../login.php');
}