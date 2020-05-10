<?php
include 'include/header.inc.php';
 ?>
<link rel="stylesheet" href="css/register.css">

<div class="container">
  <h2>Register here!</h2>
  <hr>
  <form class="reg" method="post">
    <div class="reg_nam">
      <input type="text" name="name" placeholder="First Name">
      <input type="text" name="lname" placeholder="Last Name">
    </div><br>
      <input type="email" name="email" placeholder="Email">


    <div class="passwords"><br>
      <input type="password" name="pass" placeholder="Password">
      <input type="password" name="repass" placeholder="Retype password">
    </div>
      <br>
    <div class="reg_dob">
      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob">
    </div>
      <br><br>
    <button type="submit" name="sub_reg">Submit</button>

  </form>
  <?php
  $o->register();
   ?>
</div>





</body>
</html>
