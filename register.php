<?php
include "koneksi.php";

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $level = 'admin';

     
    $insert = mysqli_query($koneksi, "INSERT INTO user(nama, username, password, level) VALUES('$nama', '$username', '$password', '$level')");

    if($insert) {
        echo '<script>alert("Pendaftaran Berhasil!"); window.location.href="login.php";</script>';
    } else {
        echo '<script>alert("Pendaftaran Gagal!");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .container{
        padding-top: 100px;
    }
    body{
        background-color: #866EC7;
    }
</style>
<body>
    <div class="container">
        <h1 class="text-center">Buat Akun Anda!</h1>
<div class="card justify-content-center">
  <div class="card-header text-center">
    Daftar Aplikasi Biodata
  </div>
  <div class="card-body">
<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="username" name="nama" placeholder="Masukan nama lengkap anda" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username atau nama anda" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password anda" required>
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
  <div class="text-center pt-3">
  <p>Sudah punya akun? <a href="login.php">Login</a></p>
  </div>
</form>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
