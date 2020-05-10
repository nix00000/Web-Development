<?php
require 'include\home_head.inc.php';
 ?>

 <link rel="stylesheet" href="css/courses.css">

<h1>Choose your course and start today</h1>


<div  id ="crs_listing">
</div>

<script src = "jquery/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#crs_listing").load("include/course_search.inc.php");

});

</script>
  </body>
</html>
