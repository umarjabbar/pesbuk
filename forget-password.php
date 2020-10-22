<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesbuk | Reset Password</title>
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
      <h1 class="auth-title">Lupa Password</h1>
      <form action="#">
        <input type="email" name="email" id="email" class="auth-input">
        <label for="email" class="auth-label">Masukan email anda untuk mengubah password</label>
        <button class="btn-login mt-7">Login</button>
      </form>
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