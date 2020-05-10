<?php
require 'classes/accounts.class.php';
if (isset($_SESSION['id'])) {
  session_destroy();
}


$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($link == 'http://localhost/php/PicnicRev/include/header.inc.php') {
  header("Location:http://localhost/php/PicnicRev/index.php");
  exit();
}

$o = new Accounts;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/header.css">


  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="logo">
          <a href="index">Picnic</a>
        </div>


        <div class="list">
                <ul>
                  <li class="options"><a href="register">Register</a></li>
                  <li class="options"><a href="login">Log In</a></li>
                </ul>
        </div>



    </div>
  </nav>
