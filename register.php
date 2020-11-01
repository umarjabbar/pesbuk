<?php
  session_start();
  include "applib.php";
  if(isset($_SESSION['login'])){
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesbuk | Buat akun baru</title>
  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/auth.css">
  
  <!-- Fonts Link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body>
  <div class="auth-page">
    <div class="auth-form">
      <img src="assets/images/Logo-Pesbuk.png" alt="Logo Pesbuk" class="logo-pesbuk">
      <h1 class="auth-title">Register</h1>
      <form method="POST">
        <label for="name" class="auth-label">Name</label>
        <input type="text" name="name" id="name" class="auth-input">

        <label for="email" class="auth-label">Email</label>
        <input type="email" name="email" id="email" class="auth-input">

        <label for="phone" class="auth-label">Nomor HP</label>
        <input type="number" name="phone" id="phone" class="auth-input">

        <label for="lahir" class="auth-label">Tanggal Lahir</label>
        <input type="date" name="lahir" id="lahir" class="auth-input" value="2003-01-01">

        
        <label class="auth-label">Jenis kelamin</label>
        <div class="links">
          <label for="pria" class="auth-radio">Pria</label>
          <label for="wanita" class="auth-radio">Wanita</label>
        </div>
        <input type="radio" name="kelamin" id="pria" value="pria" style="display: none;">
        <input type="radio" name="kelamin" id="wanita" value="wanita" style="display: none;">
        
        <label for="pass" class="auth-label">Password</label>
        <input type="password" name="pass" id="pass" class="auth-input">
        <i id="showPassToggle" class="fas fa-eye-slash" onclick="showPass()"></i> 

        <button class="btn-login" name="register">register</button>
      </form>
      <div class="links">
        <a href="login.php" class="auth-link">Sudah punya akun</a>
      </div>
    </div>
  </div>
  
  <?php
    if(isset($_POST['register'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $lahir = $_POST['lahir'];
      $kelamin = $_POST['kelamin'];
      $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

      $koneksi->query("INSERT INTO akun_pengguna (username, email, phone, password, jenis_kelamin, tanggal_lahir) VALUES ('$name', '$email', '$phone', '$pass', '$kelamin', '$lahir')");
      
      echo "<script>alert('Login Berhasil!')</script>";
    }


  
  
  ?>


  <script>
    function showPass() {
    let pass = document.getElementById("pass");
    let showPassToggle = document.getElementById("showPassToggle");
      if ( pass.type === "password" ) {
        pass.type = "text";
        showPassToggle.className="fas fa-eye"
      } else if ( pass.type === "text" ) {
        pass.type = "password"
        showPassToggle.className="fas fa-eye-slash"
      }
      return
    }
  </script>
</body>

</html>