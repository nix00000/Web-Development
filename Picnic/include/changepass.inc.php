<?php
require '../classes/details.class.php';
session_start();
$o = new Details;

if (isset($_POST['btn_save'])) {
  if ($_POST['passa']!== "" && $_POST['passb']!=="" && $_POST['passc']!=="") {
    $passold = $_POST['passa'];
    $passwa = $_POST['passb'];
    $passb = $_POST['passc'];

    if ($passwa !== $passb) {
      header("Location:../profile.php?err=match");
    }else {
      $err = $o->changePass($passold,$passb);
      header("Location:../profile.php?err=".$err);
    }
  } else {
    header("Location:../profile.php?err=fill");
  }
}
