<?php
$koneksi = mysqli_connect("localhost:3307", "root", "", "Webif"); // ganti sesuai database Anda

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahdata($data) {
    global $koneksi;
    $Nama = $data["nama"];
    $Nim = $data["nim"];
    $Jurusan = $data["jurusan"];
    $Nohp = $data["nohp"];

    $foto = upload();
    if (!$foto) {
        return 0; // upload gagal
    }

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, Nohp, foto) 
              VALUES ('$Nama', '$Nim', '$Jurusan', '$Nohp', '$foto')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function upload() {
    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];
    $ukuran = $_FILES['foto']['size'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // cek ekstensi file
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang diupload bukan gambar!');</script>";
        return false;
    }

    // cek ukuran file (misal max 2MB)
    if ($ukuran > 2 * 1024 * 1024) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // generate nama file unik
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;
    move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

    return $namaFileBaru;
}

function hapusdata($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function ubahdata($data, $id) {
    global $koneksi;
    $Nama = $data["nama"];
    $Nim = $data["nim"];
    $Jurusan = $data["jurusan"];
    $Nohp = $data["nohp"];

    // cek apakah user memilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        // jika tidak ada gambar yang diupload, tetap gunakan foto lama
        $foto = query("SELECT foto FROM mahasiswa WHERE id = $id")[0]['foto'];
    } else {
        // jika ada gambar baru, upload dan ganti foto lama
        $foto = upload();
        if (!$foto) {
            return 0; // upload gagal
        }
    }

    $query = "UPDATE mahasiswa SET 
              nama = '$Nama', 
              nim = '$Nim', 
              jurusan = '$Jurusan', 
              nohp = '$Nohp', 
              foto = '$foto' 
              WHERE id = $id";
    
    mysqli_query($koneksi, $query);
    
    return mysqli_affected_rows($koneksi);
}


function register($data) {
    global $koneksi;

    $username = stripslashes($data["username"]);
    $password1 = $data["password1"];
    $password2 = $data["password2"];

    $query = "SELECT * FROM user WHERE username= '$username'";

    $useranem_check = mysqli_query($koneksi, $query);
    if (mysqli_num_rows($useranem_check) > 0) {
        return "Username sudah terdaftar!";
    }

    if(!preg_match('/^[][a-zA-Z0-9_]+$/', $username)) {
        return "Username hanya boleh mengandung huruf, angka, dan underscore!";
    }

    if( $password1 !== $password2) {
        return "Konfirmasi password tidak sesuai!";
    }

    $encrypted_pass = password_hash($password1, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO user (username, password) VALUES ('$username', '$encrypted_pass')";

  if (mysqli_query($koneksi, $query))
  {
    return "Register Berhasil";
  }
  else
    {
    return "Register Gagal: " . mysqli_error($koneksi);
  }

}



?>