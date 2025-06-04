<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align="center">WEB INFORMATIKA 2023</h1>
    <hr size="2px" color="black">
    <nav align="center">
        <a href="index.php">HOME</a> | 
        <a href="profile.php">PROFILE</a> |
        <a href="about.php">ABOUT US</a> |
        <a href="login.php">LOGIN</a> |
        <a href="register.php">REGISTER</a>
    </nav>
    
    <H1>REGISTER</H1>
    <form action="register.php" method="post"> 
        <label for="nama">Nama Lengkap:</label> <br>
        <input type="nama" name="Nama Lengkap"> <br><br>
        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br><br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password"> <br><br>
        <label for="number">Umur:</label> <br>
        <input type="number" name="umur"> <br><br>
        <label for="date">Tanggal Lahir:</label> <br>
        <input type="date" name="tanggal lahir"> <br><br>
        <label for="color">Warna Favorit:</label> <br>
        <input type="color" name="warna favorit"> <br><br>
        <label for="file">Upload Foto Profil:</label> <br>
        <input type="file" name="upload foto profil"> <br><br>
        <label for="gender">Jenis Kelamin:</label> <br>
        <input type="radio" name="jenis kelamin"> 
        <label for="html">Laki-laki</label> <br>
        <input type="radio" name="jenis kelamin">
        <label for="html">Perempuan</label><br><br>
        <label>Hobi:</label><br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="swiming">
        <label for="vehicle1"> I like a swiming</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="ball">
        <label for="vehicle2"> I like a ball</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="run">
        <label for="vehicle3"> I like a run</label><br> 
        <label>Negara:</label><br>
        <select name="Negara">
            <option value="USA">USA</option>
            <option value="King Indo">King Indo</option>
            <option value="Bahrain">Bahrain</option>
        </select><br><br>
        <label>Biografi Singkat</label><br>
        <textarea name="Biografi" rows="4"></textarea><br><br>

        <input type="submit" value="Register"> <br> 
    </form>
</body>
</html>