<?php
  include "applib.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Pesbuk</title>
  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!-- Fonts Link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <?php
    if(isset($_GET)) {
      if(isset($_GET["page"])){
        include "navbar.php";
        if(links("page", "new-friend")){
          include "new_friend.php";
        }
        elseif (links("page", "message")) {
          echo "Pesan";
        }
        elseif (links("page", "notification")) {
          echo "Notif";
        }
      } 
      elseif (isset($_GET['fullpage'])){
        if (links("fullpage", "post-detail")) {
          include "post_detail.php";
        }
      }
      else 
      {
        include "navbar.php";
        include "homepage.php";    
      }
    }
  ?>

    <div class="popup-menu" id="menu" onclick="popupMenu(false)">
      <ul>
        <li><a href="#">Profile</a></li>
        <li class="red"><a href="index.php?fullpage=logout">Logout</a></li>
      </ul>
    </div>

  <script>
    function postDetail () {
      location = 'index.php?fullpage=post-detail&id=123';
    }

    let menu = document.getElementById("menu");
    function popupMenu(open) {
      if (open === true) {
        return menu.style.visibility = "visible";
      } else if (open === false) {
        return menu.style.visibility = "hidden";
      }
    }
  </script>
  
</body>
</html>