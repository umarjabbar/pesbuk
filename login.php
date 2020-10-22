<?php
  include "applib.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesbuk | Login</title>
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
      <h1 class="auth-title">Login</h1>
      <form action="#">
        <label for="user" class="auth-label">Email atau Nomor HP</label>
        <input type="text" name="user" id="user" class="auth-input">
        <label for="pass" class="auth-label">Password</label>
        <input type="password" name="pass" id="pass" class="auth-input">
        <i id="showPassToggle" class="fas fa-eye-slash" onclick="showPass()"></i>
        <button class="btn-login">Login</button>
      </form>
      <div class="links">
        <a href="register.php" class="auth-link">Buat akun baru</a>
        <a href="forget-password.php" class="auth-link">Lupa Password?</a>
      </div>
    </div>
  </div>
  <script>
    let pass = document.getElementById("pass");
    let showPassToggle = document.getElementById("showPassToggle");
    function showPass() {
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