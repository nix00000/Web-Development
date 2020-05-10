<?php
require 'include/home_head.inc.php';

if (!isset($_SESSION['id'])) {
  header("Location:http://localhost/php/PicnicRev/index.php");
  exit();
}
 ?>

 <link rel="stylesheet" href="css/home.css">
<div class="contis">
  <h1>Welcome to the learning hub!</h1>
  <h2>Here we focus on learning different fields<br>Select courses that you like and enjoy the content for free</h2>
</div>

<div class="contis2">
  <img src="photos\geometry.jpg" alt="math">

  <div class="cent">
    <h2>Explore different fields</h2>
    <ul>
      <li><a href="#">> Math</a></li>
      <li><a href="#">> Finance</a></li>
      <li><a href="#">> Marketing</a></li>
      <li><a href="#">> Biology</a></li>
    </ul>
    <ul>
      <li><a href="#">> Business</a></li>
      <li><a href="#">> Chemistry</a></li>
      <li><a href="#">> Construction</a></li>
      <li><a href="#">> Engineering</a></li>
    </ul>

  </div>


</div>

 


</body>
</html>
