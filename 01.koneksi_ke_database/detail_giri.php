<?php
require 'function.php';


// * ambil id dari url
$id = $_GET['id'];

$mahasiswa = query("SELECT * FROM tb_mahasiswa WHERE id=$id ");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>

<body>
    <h3>detail mahasiswa</h3>
    <?php foreach ($mahasiswa as $mhs) {   ?>
        <ul>
            <li><img src="../img/<?php echo $mhs['gambar'] ?>" alt="" height="100px" width="100px">
            </li>
            <li> <?php echo $mhs['nim'] ?></li>
            <li> <?php echo $mhs['nama'] ?></li>
            <li> <?php echo $mhs['email'] ?></li>
            <li> <?php echo $mhs['jurusan'] ?></li>
            <li> <?php echo $mhs['alamat'] ?></li>
            <li> <?php echo $mhs['jenis_kelamin'] ?></li>
            <li> <?php echo $mhs['tanggal_lahir'] ?></li>
            <li>
                <a href="">ubah</a> | <a href="">hapus</a>
            </li>
            <li>
                <a href="index.php">kembali</a>
            </li>
        </ul>
    <?php } ?>
</body>

</html>