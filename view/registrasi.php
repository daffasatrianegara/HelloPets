<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/registrasi.css">
    <title>HelloPets | Registrasi</title>
</head>

<body>
    <div class="kembali">
        <a href="landing-page.php">
            <h1 class="btn">KEMBALI</h1>
        </a>
    </div>
    <form action="../controller/register.php" method="POST">
        <div class="registrasi">
            <div class="gambar">
                <img src="../images/logo2.png" alt="" style="width : 100%">
            </div>
            <div class="form">
                <input name="nama" class="we" type="text" placeholder="Nama Lengkap">
                <input name="email" class="we" type="email" placeholder="Email">
                <input name="password" class="we" type="password" placeholder="Password">
                <input name="hp" class="we" type="number" placeholder="Nomor Telepon">
                <div class="bagian">
                    <input name="validasi" class="ceklis" type="checkbox">
                    <p class="peringatan" style="font-size: 10px;">Setuju Dengan <u style="font-size: 10px; margin-top: 5px;">Syarat Dan Ketentuan</u> Kami</p></br>
                </div>
                <div class="bagian2">
                    <input name="validasi" class="ceklis" type="checkbox">
                    <p class="peringatan" style="font-size: 10px;">Terima Penawaran Mendatang Dan Email Acara</p>
                </div>
                <input name="register" type="submit" class="we2" type="button" value="Buat Akun">
                </br><a class="login1" href="login.php"><u class="login">Sudah Punya Akun? <b>Login</b> Disini</u></a>
            </div>
        </div>
    </form>
</body>

</html>