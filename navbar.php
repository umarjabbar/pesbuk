<!-- Navbar -->
<nav>
  <div class="nav-atas">
    <a href="#">
      <img src="assets/images/Logo-Pesbuk-nav.jpg" alt="logo-persbuk" class="logo-nav">
    </a>
    <div class="circle-image" style="background-image: url('assets/images/profile/um.jpg');" onclick="popupMenu(true)">
    </div>
  </div>
  <div class="nav-bawah">
    <a href="index.php" class="nav-icon" id="home"><i class="fas fa-home"></i></a>
    <a href="index.php?page=new-friend" class="nav-icon" id="newFriend"><i class="fas fa-user-friends"></i></a>
    <a href="index.php?page=message" class="nav-icon" id="message"><i class="fas fa-comment-alt"></i></a>
    <a href="index.php?page=notification" class="nav-icon" id="notif"><i class="fas fa-bell"></i></a>
  </div>
</nav>
<!-- Akhir Navbar -->


<script>
  let url = window.location.toString();
  let home = document.getElementById("home");
  let friend = document.getElementById("newFriend");
  let message = document.getElementById("message");
  let notif = document.getElementById("notif");
  
  if (url.search("new-friend") > 0) {
    friend.classList.add("active");
  } 
  else if (url.search("message") > 0) {
    message.classList.add("active");
  }
  else if (url.search("notif") > 0) {
    notif.classList.add("active");
  }
  else {
    home.classList.add("active");
  }
  
  console.log(url);
</script>