<?php
include 'dbh.class.php';

class Details extends Dbh{

  public function GetData(){
    $id = $_SESSION['id'];
    $sql = 'SELECT * FROM users WHERE user_id = ?';
    $stmt = self::connect()->prepare($sql);
    $stmt->execute(array($id));
    $data = $stmt->fetch();
    $r = array('name' => $data['name'],'lname' => $data['lname'], 'dob' => $data['dob'],'email' => $data['email'],'status' => $data['status'],);
    return $r;

  }
  public function changePic($pic){
    $id = $_SESSION['id'];
    $sql = 'UPDATE users SET picture = ? WHERE user_id = ?';

    $stmt = self::connect()->prepare($sql);
    if (!$stmt->execute(array($pic,$id))) {
      echo "failed to change picture";
    }else {
      echo "Upload Successful";
    }
  } // END OF METHOD

  public function changePass($pass_old,$pass_unsafe){
    $id = $_SESSION['id'];
    $err = '';
    $sqla = 'SELECT * FROM users WHERE user_id = ?';
    $stmt = self::connect()->prepare($sqla);
    $stmt->execute(array($id));
    $data = $stmt->fetch();
    $passver = $data['password'];
    $pass = password_hash($pass_unsafe, PASSWORD_DEFAULT);

    if (!password_verify($pass_old,$passver)) {
      $err = "wrongpass";
      return $err;
    }else {
      // Update user
      $sql = 'UPDATE users SET password = ? WHERE user_id = ?;';
      $stmta = self::connect()->prepare($sql);
      if (!$stmta->execute(array($pass,$id))) {
        $err = "dberr";
        return $err;
      }else{
        $err = "success";
        return $err;
      }

    }


  }// END OF METHOD

  public function getCourses(){
    $id = $_SESSION['id'];
    $sql = 'SELECT course
            FROM users_courses
            JOIN users ON (users.user_id = users_courses.userid)
            JOIN courses ON (courses.course_code = users_courses.courseid)
            WHERE user_id = ?';
    $stmt = self::connect()->prepare($sql);
    $stmt->execute(array($id));
    $data = $stmt->fetchAll();
    return $data;


  }

  public function searchall(){
    $sql = 'SELECT * FROM courses';
    $stmt = self::connect()->query($sql);

    $data = $stmt->fetchAll();
    return $data;

  }// END OF method


public function enrollment($par){
  $sql = 'SELECT course_code FROM courses WHERE course = ?';
  $stmt = self::connect()->prepare($sql);
  $stmt->execute(array($par));
  $courses = $stmt->fetch();


  $crs = $courses[0];
  $id = $_SESSION['id'];

  $sql = 'INSERT INTO users_courses (userid,courseid) VALUES (?,?)';
  $stmt = self::connect()->prepare($sql);
  try{
    $stmt->execute(array($id,$crs));
    return "Success";

  }catch (Exception $e){
    return "Failed";
  }



}



}
