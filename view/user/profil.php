<?php
require_once("./../../controller/auth.php");
include './../../controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM user WHERE id_user = '" . $_SESSION['user'] . "' ");
$d = mysqli_fetch_object($query);
$user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM user WHERE id_user = '" . $_SESSION['user'] . "' "));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../CSS/profil.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HelloPets | akun saya</title>
</head>

<body>
    <ul>
        <li>
            <a href="halaman-user.php">
                <img class="logo" src="../../images/logo.PNG" alt="logo">
            </a>
        </li>
        <li>
            <a href="halaman-user.php">
                <h1 class="judul">HelloPets</h1>
            </a>
        </li>
        <li><a class="fitur" href="halaman-user.php">
                <h1 class="font">BERANDA</h1>
            </a></li>
        <li><a class="fitur2" href="caridok.php">
                <h1 class="font">CARI DOKTER</h1>
            </a></li>
        <li><a class="fitur4" href="konsultasi.php">
                <h1 class="font">KONSULTASI</h1>
            </a></li>
        <li class="daftar">
            <a href="profil.php">
                <h1 class="daftar">PROFIL</h1>
            </a>
        </li>
        <li class="masuk">
            <a href="../../controller/logout.php">
                <h1 class="login">LOGOUT</h1>
            </a>
        </li>
    </ul>
    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
        <div class="batas"></div>
        <div class="upload">
            <?php
            $id = $user["id_user"];
            $name = $user["nama"];
            $image = $user["foto"];
            ?>
            <img src="../img/<?php echo $d->foto ?>" width=125 height=125 title="<?php echo $d->foto ?>">
            <div class="round">
                <input type="hidden" name="id_user" value="<?php echo $d->id_user ?>">
                <input type="hidden" name="name" value="<?php echo $d->nama ?>">
                <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                <i class="fa fa-camera" style="color: #fff;"></i>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        document.getElementById("image").onchange = function() {
            document.getElementById("form").submit();
        };
    </script>
    <?php
    if (isset($_FILES["image"]["name"])) {
        $id = $d->id_user;
        $name = $d->nama;

        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        // Image validation
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $imageName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
            echo
            "
        <script>
          alert('Invalid Image Extension');
          document.location.href = '../user/profil.php';
        </script>
        ";
        } elseif ($imageSize > 1200000) {
            echo
            "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '../user/profil.php';
        </script>
        ";
        } else {
            $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
            $newImageName .= '.' . $imageExtension;
            $query = "UPDATE user SET foto = '$newImageName' WHERE id_user = '" . $d->id_user . "'";
            mysqli_query($con, $query);
            move_uploaded_file($tmpName, '../img/' . $newImageName);
            echo
            "
        <script>
        document.location.href = '../user/profil.php';
        </script>
        ";
        }
    }
    ?>
    <div class="header">
        <form class="form1" action="" method="POST">
            <label for="nama" class="first-name">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="edit" value="<?php echo $d->nama ?>" required>

            <label for="email" class="last-name">Email</label>
            <input type="email" name="email" placeholder="email" class="edit" value="<?php echo $d->email ?>" required>

            <label for="nomor telepon">Nomor Telepon</label>
            <input type="text" name="telepon" placeholder="hp" class="edit" value="<?php echo $d->telepon ?>" required>
            <input type="submit" name="ubah_data" value="UBAH PROFIL" class="tombol">
        </form>
        <?php
        if (isset($_POST['ubah_data'])) {

            $nama   = $_POST['nama'];
            $email   = $_POST['email'];
            $telepon     = $_POST['telepon'];

            $update = mysqli_query($con, "UPDATE user SET
                                nama = '" . $nama . "',
                                email = '" . $email . "',
                                telepon = '" . $telepon . "'
                                WHERE id_user = '" . $d->id_user . "' ");

            if ($update) {
                $message = "Data anda berhasil diubah!!";
                echo "<script type='text/javascript'>alert('$message');
            window.location.href='profil.php';</script>";
            } else {
                $message = "Data anda Gagal diubah!!";
                echo "<script type='text/javascript'>alert('$message');
            window.location.href='profil.php';</script>";
            }
        }
        ?>
        <br>
        <h3 class="jp">Ubah Password</h3>
        <div class="box">
            <form name="form2" action="" method="POST">
                <input id="exampleInputPassword1" type="password" name="passasli" placeholder="Password Baru" class="fake" required value="<?php echo $d->password ?>" required>
                <input id="exampleInputPassword2" type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
                <input id="exampleInputPassword3" type="password" name="pass2" placeholder="Konfirmasi Password Baru" class="input-control" required>
                <input type="checkbox" class="cekbox" id="show-password">
                <font color="#1b4974" style="font-family: Poppins, sans-serif;">Tampilkan Password </font>
                <br>
                <br>
                <input type="submit" name="ubah_password" value="UBAH PASSWORD" class="tombol1">
            </form>
            <?php
            if (isset($_POST['ubah_password'])) {

                $pass1   = $_POST['pass1'];
                $pass2   = $_POST['pass2'];

                if ($pass2 != $pass1) {
                    echo '<script>alert("Konfirmasi password tidak sesuai")</script>';
                } else {
                    $pass  = password_hash($pass1, PASSWORD_DEFAULT);
                    $u_pass = mysqli_query($con, "UPDATE user SET
                                password = '$pass1',
                                passmd5 = '$pass'
                                WHERE id_user = '$d->id_user' ");
                    if ($u_pass) {
                        echo '<script>alert("Ubah password Berhasil!!")</script>';
                        echo '<script>window.location="profil.php"</script>';
                    } else {
                        echo '<script>alert("Ubah password Gagal!!")</script>';
                        echo '<script>window.location="profil.php"</script>';
                    }
                }
            }
            ?>
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#exampleInputPassword1').attr('type', 'text');
            } else {
                $('#exampleInputPassword1').attr('type', 'password');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#exampleInputPassword2').attr('type', 'text');
            } else {
                $('#exampleInputPassword2').attr('type', 'password');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#show-password').click(function() {
            if ($(this).is(':checked')) {
                $('#exampleInputPassword3').attr('type', 'text');
            } else {
                $('#exampleInputPassword3').attr('type', 'password');
            }
        });
    });
</script>

</html>