<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM tb_mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>

<body>
    <h1>daftar mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td> <?php echo $i++; ?></td>
                <td><img src="../img/<?php echo $mhs['gambar'] ?>" alt="" height="100px" width="100px"></td>
                <td><?php echo $mhs['nama'] ?> </td>
                <td>
                    <!-- menambahkan parameter id di link -->
                    <a href="detail.php?id=<?php echo $mhs['id']; ?>">lihat detail</a>
                </td>
            </tr>
        <?php } ?>

    </table>
    <!--  -->

</body>

</html>