<?php
// * koneksi ke database dan pilih databasenya
$conn = mysqli_connect('localhost', 'root', '', 'db_mahasiswa');

// * query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");

// * ubah data ke array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}



// * tampung data ke variable mahasiswa 
$mahasiswa = $rows;


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
            <th>niim </th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
            <th>jenis kelamin</th>
            <th>aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) { ?>
            <tr>
                <td> <?php echo $i++; ?></td>
                <td><img src="../img/<?php echo $mhs['gambar'] ?>" alt="" height="100px" width="100px"></td>
                <td><?php echo $mhs['nama'] ?> </td>
                <td><?php echo $mhs['nim'] ?> </td>
                <td><?php echo $mhs['email'] ?> </td>
                <td><?php echo $mhs['jurusan'] ?> </td>
                <td><?php echo $mhs['jenis_kelamin'] ?> </td>
                <td>
                    <a href="">ubah</a> | <a href="">hapus</a>
                </td>
            </tr>
        <?php } ?>

    </table>

</body>

</html>