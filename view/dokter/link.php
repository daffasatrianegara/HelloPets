<?php 
$user = $_GET['nama_user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/link.css">
    <title>HelloPets</title>
</head>
<body>
    <form action="./../../controller/ceklink.php?nama_user=<?php echo $user; ?>" method="POST">
    <div class="link">
        <h1 class="desc">Masukkan Link Zoom anda</h1>
    </div>
    <div class="container">
        <input name="link" class="text" type="text" placeholder="masukkan link zoom disini"><br>
        <input name="submit" class="submit" type="submit" value="input">
    </div>
    </form>
</body>
</html>