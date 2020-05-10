<?php
session_start();
//
//
//
require '..\classes\details.class.php';
$o = new Details;
$data = $o->GetData();
$name = $data['name'];
$lname = $data['lname'];
$email = $data['email'];
$status = $data['status'];

$num = $_POST['nums'];
if ($num == 1) {
  echo '<div class="tab_ov">
      <h2>My Profile</h2>
      <p><b>Name: </b>'.$name." ".$lname.'</p>
      <p><b>Email: </b>'.$email.'</p>
      <p><b>Status: </b>'.$status.'</p>
  </div>';
}else if( $num == 2){
  echo '<div id="cont">
  <div id="courses_lists">
  <h2>My Courses</h2><hr>';
  $z = new Details;
  $courses = $z->getCourses();
  foreach ($courses as $crs) {
    echo "<p class='courses_list'> > ".$crs[0]." -<b>Enrolled</b></p><br>";
  }
  echo "</div>";
}else {
  echo '<div class="tab1">
        <h2>Settings</h2>
        <form class="sets" action="include/profilechange.inc.php" method="post" enctype="multipart/form-data">
          <div class ="pic_row"><p>Change profile picture:</p>
          <input type="file" name="file_upload"><br><br>
          <button class="save_change" type="submit" name="submit_photo">Upload</button>
          </div>
        </form>

  </div>

    <br>
    <hr>
    <form class="sets" action="include/changepass.inc.php" method="post">
    <div class="tab1">
      <div class="chang_row">
          <p>Change password:</p>
          <td><input type="password" name="passa" placeholder="Old password..."><br><br>
            <input type="password" name="passb" placeholder="New password..."><br>
            <input type="password" name="passc" placeholder="Retype password..."></td>
      </div>

        <br>
        <button class="save_change" type="submit" name="btn_save">Save Changes</button>
        </div>
      </form>';
}
