<?php
require('koneksi.php');
    if (isset($_POST['selesai'])) {
        $dokter = $_POST['dokter'];
        $user = $_POST['user'];
        $jenis = $_POST['jenis'];
        $keluhan = $_POST['keluhan'];
        $penyakit = $_POST['penyakit'];
        $solusi = $_POST['solusi'];
        $obat = $_POST['obat'];
        $q = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE email = '$user' "));
        $nama = $q['nama'];
        $query = "INSERT INTO hasilk 
        (email_user, email_dokter, jenis, keluhan, penyakit, solusi, obat)
        VALUES ('$user','$dokter', '$jenis', '$keluhan', '$penyakit', '$solusi', '$obat')";
        $result   = mysqli_query($con, $query);
        $update = "UPDATE konsultasi SET status = 'no' WHERE nama_user = '$nama'";
        $result2   = mysqli_query($con, $update);
        if ($result) {
            $message = "Data terkirim!!";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../view/dokter/konsul.php';</script>";
        } else {
            $message = "Data gagal terkirim!!";
            echo "<script type='text/javascript'>alert('$message');
            window.location.href='../view/dokter/hasil.php';</script>";
        }
    }
