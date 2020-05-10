<?php

session_start();
include '..\classes\details.class.php';

$tp = new Details;
if (isset($_POST['enroll'])) {
  $course = $_POST['enroll'];
  echo $tp->enrollment($course);
}else {
  header('Location:../home.php');
}
?>

<a href="../profile.php">Return to profile</a>
