<?php
// Koneksi ke database 
$koneksi = new Mysqli("localhost", "root", "", "pesbuk");

// Links
function links($parm, $link) {
  $output = $_GET[$parm] === $link;
  return $output;
}

?>