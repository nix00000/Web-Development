
<?php
include 'include/db.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rotariot Hotel</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <style media="screen">
    body {
      font-size: 2em;
    }
      .cent {
        height :200px;
        width :400px;
        background-color: lightgrey;
        align-self: center;
        margin-left: 300px;
        margin-top: 30px;
        padding: 30px;
      }

      .login button {
        padding-right: 15px;
        padding-left: 15px;
        padding-top: 3px;
        padding-bottom: 3px;

      }

      .title {
        margin-bottom:0px;
        margin-left: 360px;
      }
      .opt {
        width:100px;
        height:40px;
      }




    </style>
  </head>
  <body>



    <div class="page-header">
      <h1>Rotariot Hotel</h1>
    </div>
    <div align = "center" class= "cent">
      <form method="POST" class ="login">
        <table>
          <tr class="form-group">
            <td class="opt">Email:</td>
            <td class="opt"><input type="email" name="email"> </td>
          </tr>
          <tr class="form-group">
            <td class="opt">Password:</td>
            <td class="opt"><input type="password" name="pwd"> </td>
          </tr>
        </table>
        <br>

          <button type="submit" name="submit">Log In</button>

      </form>
    </div>
    <?php

    $O ->login();
     ?><br><br>

    <a href="register.php">Register</a><br>



  </body>
</html>
