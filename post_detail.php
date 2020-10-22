<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Detail</title>
  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <!-- Fonts Link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
  <div class="card" style="margin: 0;">
    <div class="post-user-info">
      <a href="#" class="user-info">
        <div class="rounded-image" style="background-image: url('assets/images/profile/um.jpg');"></div>
        <div class="user">
          <h3 class="username">Umar Abdul Jabbar</h3>
          <span>3 menit yang lalu</span>
        </div>
      </a>
      <i class="fas fa-ellipsis-h" onclick="popupMenu(true)"></i>
    </div>
    <img class="post-image" src="assets/images/profile/um.jpg" alt="fotomu">
    <div class="post-react">
      <i class="fas fa-thumbs-up"></i> 
      <i class="fas fa-comment-alt"></i> 
      <i class="fas fa-share"></i> 
    </div>
    <div class="post-comment">
      <div class="rounded-image" style="background-image: url('https://images.unsplash.com/photo-1601607317042-cc9dd3808e2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></div>
      <div class="comment">
        <h4>Sarah</h4>
        Lorem ipsum dolor sit amet consectetur adipisicing.
        <div class="comment-react">
          <a href="#">Suka</a>
          <a href="#">Balas</a>
        </div>
      </div>
    </div>
    <div class="post-comment">
      <div class="rounded-image" style="background-image: url('https://images.unsplash.com/photo-1601931935934-17c3717239ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');"></div>
      <div class="comment">
        <h4>Jhon</h4>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam maxime recusandae eum, distinctio assumenda, eos labore nostrum sint quis, dolorem deleniti.
        <div class="comment-react">
          <a href="#">Suka</a>
          <a href="#">Balas</a>
        </div>
      </div>
    </div>
    <div class="post-send-comment">
      <div class="rounded-image" style="background-image: url('assets/images/profile/um.jpg');"></div>
      <input type="text" name="comment">
      <i class="fas fa-paper-plane"></i>
    </div>
  </div>

  <div class="popup-menu" id="option" onclick="popupMenu(false)">
    <ul>
      <li><a href="#">Edit</a></li>
      <li><a href="#">Share</a></li>
      <li><a href="#">Hide</a></li>
      <li class="red"><a href="#">Delete</a></li>
    </ul>
  </div>

  <script>
    let option = document.getElementById("option");
    function popupMenu(open) {
      if (open === true) {
        return option.style.visibility = "visible";
      } else if (open === false) {
        return option.style.visibility = "hidden";
      }
    }
  </script>
</body>
</html>