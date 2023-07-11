<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/datatanya.css">
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
    <h1 class="ket1">DATA BELUM DI ACC</h1>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Nomor</td>
                <td>Email</td>
                <td>Pertanyaan</td>
                <td>Status</td>
                <td>Aksi</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from pertanyaan WHERE status = 'no'");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['isi'] . "</td>
    <td>" . $row['status'] . "</td>
    <td>
    <a href='./../../controller/acc.php?id_pertanyaan=$row[id_pertanyaan]'>ACC</a>
    <a href='./../../controller/delete.php?id_pertanyaan=$row[id_pertanyaan]'>Delete</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
    <h1 class="ket2">DATA SUDAH DI ACC</h1>
    <div>
        <br><br><br>
        <table style="margin-left:auto;margin-right:auto; text-align: center; width:50%;" border="1">
            <tr>
                <td>Nomor</td>
                <td>Email</td>
                <td>Pertanyaan</td>
                <td>Status</td>
                <td>Aksi</td>

            </tr>
            <?php
            include './../../controller/koneksi.php';
            $users = mysqli_query($con, "SELECT * from pertanyaan WHERE status = 'yes'");
            $no = 1;
            foreach ($users as $row) {
                echo "<tr>
    <td>$no</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['isi'] . "</td>
    <td>" . $row['status'] . "</td>
    <td>
    <a href='./../../controller/acc.php?id_pertanyaan=$row[id_pertanyaan]'>UN ACC</a>
    <a href='./../../controller/delete.php?id_pertanyaan=$row[id_pertanyaan]'>Delete</a>
    </td>
      </tr>";
                $no++;
            } ?>
        </table>
    </div>
</body>

</html>