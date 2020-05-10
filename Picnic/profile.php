<?php
require 'include/home_head.inc.php';

if (!isset($_SESSION['id'])) {
  header("Location:http://localhost/php/PicnicRev/index.php");
  exit();
}
 ?>

 <link rel="stylesheet" href="css/profile.css">

 <br><br>

 <div class="container">
   <div class="person">
     <div class="image">
       <?php
       echo '<img class="profile" src="'.$pics.'">';
        ?>

     </div>

     <br><br>

     <div class="settings">
       <ul>
         <li class = "set_li" id = "ov"><a href="#">Overview</a></li>
         <li class = "set_li" id = "crs"><a href="#">My Courses</a></li>
         <li class = "set_li" id = "stg"><a href="#">My Settings</a></li>

       </ul>

     </div>

   </div>
   <div class="main" id = "main">
     <?php

     if (isset($_GET['err'])) {
       $url_rez = $_GET['err'];
       if ($url_rez == "fill") {
         echo "Password not reset";
       }elseif ($url_rez == "match") {
         echo "Password do not match";
       }elseif ($url_rez == "wrongpass") {
         echo "Old password is not correct";
       }elseif ($url_rez == "success") {
         echo "Success";
       }elseif ($url_rez == "dberr") {
         echo "Failed to Connect";
       }
     }else {
       echo "<h2 class ='wel'>This is your profile.</h2>";
       echo "<h2 class ='wel'>Here you change your details <br>As well as check out the courses you are taking</h2>";
     }

      ?>

   </div>

 </div>


<script>
x = document.getElementsByClassName('set_li');
console.log(x.length);
x[0].addEventListener("click", active);
x[1].addEventListener("click", active);
x[2].addEventListener("click", active);


   function active () {
     for (var i = 0; i < x.length; i++) {
       x[i].style.background = "#305048";
     }
     this.style.background = "#13201d";

 }

</script>
<script src="jquery/jquery.js"></script>
<script>
var num;
$(document).ready(function(){

  // Buttons
  $('#ov').click(function(){
      num = 1;
    $('#main').html("");
    $('#main').load('include/profile.inc.php', {
      nums :num
    });
  });

  $('#crs').click(function(){
      num = 2;
    $('#main').html("");
    $('#main').load('include/profile.inc.php', {
      nums: num
    });
  });

  $('#stg').click(function(){
      num = 3;
    $('#main').html("");
    $('#main').load('include/profile.inc.php', {
      nums :num
    });
  });


// END OF MAIN
});

</script>
</body>
</html>
