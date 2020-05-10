<?php
require 'include/header.inc.php';
?>
<link rel="stylesheet" href="css/login.css">

<div class="container">
  <h2>Log in</h2>
  <hr>
  <form class="reg" method="post">
    <div class="reg_nam">
      <input type="email" name="lemail" placeholder="Email">
    </div><br>
    <input type="password" name="lpass" placeholder="Password">
    <br><br>

    <button type="submit" name="sub_log">Log in</button>

  </form>
  <br>
  <p class="ss"><small>Don't have an account? click <a href="register.php">here</a> to register </small></p>
</div>

<?php
$o->login();
?>



</body>
</html>
