<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>HelloPets | Login</title>
</head>

<body>
    <div class="back">
        <a class="back2" href="landing-page.php">
            <h1 class="">KEMBALI</h1>
        </a>
    </div>
    <form action="../controller/cek_login.php" method="POST">
        <div class="form">
            <div class="gambar">
                <img class="gambar2" src="../images/logo-2.png" alt="gambar logo" style="width: 100%">
            </div>
            <div class="isi">
                <input name="email" class="we" type="email" placeholder="Email">
                <input name="password" class="we" type="password" placeholder="Password">
                <input name="masuk" type="submit" class="we2" type="button" value="Masuk">
                </br><a href="registrasi.php" style="text-decoration: none;"><u class="login">Belum Punya Akun? <b>Registrasi</b> Disini</u></a>
            </div>
        </div>
    </form>
</body>

</html>