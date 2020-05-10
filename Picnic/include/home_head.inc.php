<?php
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($link == 'http://localhost/php/PicnicRev/include/home_head.inc.php') {
  if(isset($_SESSION['id'])) {
    header("Location:http://localhost/php/PicnicRev/home");
    exit();
  }else {
    header("Location:http://localhost/php/PicnicRev/index");
    exit();
  }

}
require 'classes/accounts.class.php';
session_start();


$s = new Accounts;
$tr = $s->query();
$pics = $s->profPic();


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/home_head.css">
  </head>
  <body>
    <nav class="port_nav">
      <div class="users">
        <div class="img">
          <a href="profile">
            <?php
            echo '<img class="profile" src="'.$pics.'">';
             ?></a>

        </div>
        <div class="img_name">
          <?php
          echo '<h2 class="user">'.$tr."</h2>";
           ?>
        </div>



      </div>

      <div class="links">
        <ul>
          <li><a href="home">Home</a></li>
          <li><a href="profile">Profile</a></li>
          <li><a href="courses">Courses</a></li>
          <li><a href="include/logout.inc.php">Logout</a></li>
        </ul>

      </div>



    </nav>
