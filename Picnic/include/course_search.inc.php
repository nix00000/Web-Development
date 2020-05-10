<?php
session_start();
include '..\classes\details.class.php';

$u = new Details;

$out = $u->searchall();

  foreach ($out as $key=>$val) {
      echo '<div class="crses">
        <a href="#"><h3>'.$val['course'].'</h3></a>
        <form action="include/enrollment.php" method="post">

    <button type="submit" name="enroll" value="'.$val['course'].'">enroll</button>


      </form>
    </div>';
}


 ?>
