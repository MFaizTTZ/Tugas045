<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | WEB INFORMATIKA </title>
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
    
    <H1>LOGIN</H1>
    <form action="login.php" method="post" 
    enctype="multipart/form-data" >
        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password"> <br>
        <input type="checkbox" name="remember" value="1">
        <label for="remember">Ingatkan Saya!</label> <br> 
        <input type="submit" value="Login"> <br> 
    </form>
    <p>Belum punya akun?<a href="register.php">Daftar</a></p>
</body>
</html>