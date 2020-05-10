<?php
require '../classes/details.class.php';
session_start();

$up = new Details;
$path = "profiles/".$_FILES["file_upload"]['name'];

if (!isset($_POST['submit_photo'])) {
  header("Location:../Profile.php");
}else {
  // FILE EXAMPLE
  if ($_FILES["file_upload"]["name"] !== "") {
    $uploadOk = 1;
    $directory = '../profiles/';
    $file = $directory. basename($_FILES["file_upload"]["name"]);

    echo $_FILES["file_upload"]["tmp_name"]."<br>";
    $fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
      if($check !== false) {
          $uploadOk = 1;
      } else {
          $uploadOk = 0;
      }
      //  Check if file exists
      if (file_exists($file)) {
          $uploadOk = 0;
          $up->changePic($path);
          header("Location:../Profile.php?success");
          exit();
      }

      // Check file size
      if ($_FILES["file_upload"]["size"] > 500000) {
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Upload
      if ($uploadOk == 0) {
            header("Location:../Profile.php?failed");
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $file)) {
          $up->changePic($path);
          header("Location:../Profile.php?success");
        } else {
          header("Location:../Profile.php?failed");
        }
    }

      // END OF FUCTNION
  }else {
    header("Location:../Profile.php?failed");
  }

}
