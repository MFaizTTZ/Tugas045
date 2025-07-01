<?php

    require 'function.php';

    $query = "SELECT * FROM mahasiswa";
    $rows = query($query); /// hasilnya wadah dengan isinya

    /// ambil data dai result

    //while ( $mhs = mysqli_fetch_assoc($result))
    //{
     //   var_dump($mhs);
    //} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data mahasiswa </h1>

    <a href="tambahdata.php"><button style="margin-bottom: 12px;
    background-color: lightgreen;">Tambah Data</button></a>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>No.hp</th>
            <th>Aksi</th>
        </tr>
        <?php 
        $i = 1;
        foreach($rows as $mhs ) {?>
        <tr>
            <td><?= $i?></td>
            <td><img src ="IMAGE/<?= $mhs["foto"]?>"width="60"></td>
            <td><?= $mhs["nama"]?> </td>
            <td><?= $mhs["nim"]?></td>
            <td><?= $mhs["jurusan"]?></td>
            <td><?= $mhs["nohp"]?></td>
            <td><a href="hapusdata.php/?id=<?= $mhs["id"]?>"><button style="margin-bottom: 12px;
             background-color: lightred;">Hapus Data</button></a></td>
        </tr>
        <?php $i++; } ?>
    </table>
</body>
</html>