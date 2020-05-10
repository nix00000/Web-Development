<?php
include 'include/db.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rotariot Hotel</title>

    <style media="screen">
      .cent {
        height :200px;
        width :300px;
        background-color: lightgrey;
        align-self: center;
        margin-left: 300px;
        margin-top: 30px;
        padding: 10px;
      }

      .login tr {
        height:30px;

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




    </style>
  </head>
  <body>

    <h1 class="title">Rotariot Hotel</h1>
    <div align = "center" class= "cent">
      <form method="POST" class ="login">
        <table>
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname"> </td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname"> </td>
          </tr>

          <tr>
            <td>Email:</td>
            <td><input type="email" name="emailr"> </td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="password" name="pwdr"> </td>
          </tr>
        </table>
        <br>

          <button type="submit" name="submitr">Submit</button>

      </form>
    </div>
    <?php
    $O->register();
     ?>
     <br><br>
    <a href="index.php">Log In</a>


  </body>
</html>
