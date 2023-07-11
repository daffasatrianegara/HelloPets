<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/pertanyaan.css">
    <title>HelloPets | Home</title>
</head>

<body>
    <ul>
        <li>
            <a href="halaman-user.php">
                <img class="logo" src="../../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="halaman-dokter.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="halaman-dokter.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="pertanyaan.php">
                <h1 class="font">PERTANYAAN</h1>
            </a></li>
        <li><a class="fitur4" href="konsul.php">
                <h1 class="font">KONSULTASI</h1>
            </a></li>
        <li class="daftar">
            <a href="profildok.php">
                <h1 class="daftar">PROFIL</h1>
            </a>
        </li>
        <li class="masuk">
            <a href="../../controller/logout.php">
                <h1 class="login">LOGOUT</h1>
            </a>
        </li>
    </ul>
    <div class="pertanyaan">
        <h1 class="judul">PERTANYAAN</h1>
        <p class="judul2">Pertanyaan dari para user</p>
    </div>
    <div class="content">
    <?php
        include './../../controller/koneksi.php';
        $hasil = mysqli_query($con, "SELECT * FROM pertanyaan WHERE status != 'no'");
        $jumlah = mysqli_num_rows($hasil);
        $urut = 0;
        while ($row = mysqli_fetch_array($hasil)) {
            $id = $row["id_pertanyaan"];
            $email = $row["email"];
            $pertanyaan = $row["isi"];
            $status = $row["status"];
        ?>
        <div>
            <div class="user">
                <h1 class="user2"><?php echo $email; ?></h1>
                <h1 class="user3"><?php echo $pertanyaan; ?></h1>
            </div>
        </div>
        <?php }?>
    </div>
</body>

</html>