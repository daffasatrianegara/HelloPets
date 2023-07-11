<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/halamanad.css">
    <title>HelloPets | Admin</title>
</head>

<body>
    <ul>
        <li>
            <a href="halaman-admin.php">
                <img class="logo" src="../../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="halaman-admin.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="halaman-admin.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="datauser.php">
                <h1 class="font">DATA USER</h1>
            </a></li>
        <li><a class="fitur2" href="datadok.php">
                <h1 class="font">DATA DOKTER</h1>
            </a></li>
        <li><a class="fitur2" href="datatanya.php">
                <h1 class="font">PERTANYAAN</h1>
            </a></li>
        <li class="fitur4">
            <a href="datakonsul.php">
                <h1 class="daftar">DATA KONSULTASI</h1>
            </a>
        </li>
        <li class="masuk">
            <a href="../../controller/logout.php">
                <h1 class="login">LOGOUT</h1>
            </a>
        </li>
    </ul>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Nomor</td>
                <td>Nama</td>
                <td>Email</td>
                <td>password</td>
                <td>Nomor telepon</td>
                <td>jadwal operasional</td>
                <td>jam operasional</td>
                <td>pengalaman</td>
                <td>aksi</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from dokter");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['nama'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['passmd5'] . "</td>
    <td>" . $row['telepon'] . "</td>
    <td>" . $row['jadwal_operasional'] . "</td>
    <td>" . $row['jam_operasional'] . "</td>
    <td>" . $row['bio'] . "</td>
    <td>
    <a href='./../../controller/delete.php?id_dokter=$row[id_dokter]'>Delete</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>