<?php

    $koneksi = mysqli_connect ("localhost:3307","root","","Webif");

    if (! $koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query);   /// Object

    /// ambil data dai result

    $mhs = mysqli_fetch_assoc($result);  /// Array Asosiatif
    /// mysqli_fetch_assoc() untuk mengambil data sebagai array asosiatif
    /// mysqli_fetch_row() untuk mengambil data sebagai array numerik
    /// mysqli_fetch_array() untuk mengambil data sebagai array asosiatif dan numerik
    /// mysqli_fetch_object() untuk mengambil data sebagai objek

    var_dump($mhs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data mahasiswa </h1>
    
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>No.hp</th>
        </tr>
    </table>
</body>
</html>