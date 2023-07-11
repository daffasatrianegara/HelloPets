<?php
require_once("./../../controller/auth.php"); 
include './../../controller/koneksi.php';
$query = mysqli_query($con, "SELECT * FROM user WHERE id_user = '".$_SESSION['user']."' ");
    $d = mysqli_fetch_object($query);
?>
<?php
include './../../controller/koneksi.php';
$id_dokter = $_GET['id_dokter'];
$sql = mysqli_query($con, "SELECT * FROM dokter WHERE id_dokter='$id_dokter'");
$data = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/pembayaran.css">
    <title>HelloPets | Pembayaran</title>
</head>

<body>
    <div class="back">
        <a class="back2" href="caridok.php" style="text-decoration: none;">
            <h1 class="button">KEMBALI</h1>
        </a>
    </div>
    <h1 class="bayar"> FORM PEMBAYARAN</h1>
    <form action="./../../controller/pembayaran.php?id_dokter=<?php echo $id_dokter; ?>" method="POST">
        <div class="card">
            <div class="foto">
                <img class="foto2" src="../img/<?php echo $data['foto'] ?>" alt="" style="width: 100%;">
            </div>
            <div class="container">
                <p class="nama"><?php echo $data['gelar']; ?> <?php echo $data['nama']; ?></p>
                <p class="bio"><?php echo $data['bio']; ?></p>
                <p class="harga">Harga : <b><?php echo $data['harga']; ?></b></p>
            </div>
            <div class="input">
                <p class="via">Silahkan Bayar Melalui Bank BCA :</p>
                <input class="norek" type="text" value="<?php echo $data['norek'] ?>" readonly><br>
                <input name="bayar" class="lunas" type="submit" value="Bayar">
            </div>
        </div>
    </form>
    </div>
</body>

</html>