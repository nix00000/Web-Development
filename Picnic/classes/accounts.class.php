<?php
include 'dbh.class.php';

/**
 *
 */
class Accounts extends Dbh{

  public function query(){
    $id = $_SESSION['id'];
    $sql = 'SELECT * FROM users WHERE user_id = ?;';

    $stmt = self::connect()->prepare($sql);
    $stmt->execute(array($id));
    $dat = $stmt->fetch();
    $r = $dat['name'];
    return $r;
  }

  public function register () {
    if (isset($_POST['sub_reg'])) {
      if ($_POST['name']=='' || $lname = $_POST['lname'] =='' ||  $_POST['email']=='' || !isset( $_POST['dob'])) {
        echo "<p class='bd'>Please fill in all the fields</p>";
        exit();
      }else {
        $name = strip_tags($_POST['name']);
        $lname = strip_tags($_POST['lname']);
        $email = strip_tags($_POST['email']);
        $dob = $_POST['dob'];
        // $dob = date_format($dobs,"Y/m/d");

        if ($_POST['pass'] !== $_POST['repass']) {
          $mes = '<p class="bd">Passwords do not match </p>';
          echo $mes;
          exit();
        }else {
          $password_unsafe = $_POST['pass'];
          $password = password_hash($password_unsafe,PASSWORD_DEFAULT);
        }

        $sql = 'INSERT INTO users (name,lname,email,password,dob) VALUES (?,?,?,?,?)';
        $stmt = self::connect()->prepare($sql);
        if (!$stmt->execute(array($name,$lname,$email,$password,$dob))) {
          echo "<p class='bd'>Failed to register</p>";
        }else {
          echo "<p class='gd'>Successfully registered!</p>";
        }

      }

    }


  } // END OF METHOD

  public function login(){
    if (isset($_POST['sub_log'])) {
      if ($_POST['lemail']=='' && $pass = $_POST['lpass']=='') {
        echo '<p class="bd">Please fill in all the fields</p>';
      }else {
        $email = $_POST['lemail'];
        $pass = $_POST['lpass'];

        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = self::connect()->prepare($sql);
        $stmt->execute(array($email));
        $data = $stmt->fetch();
        if ($data == 0) {
          echo "<p class='bd'>This account does not exist</p>";
        }else {
          if (password_verify($pass,$data['password'])) {
            session_start();
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['email'] = $data['email'];

            header("Location:home.php");
          }else {
            echo "Wrong password";
          }

        }


      }//END OF TEST ELSES
    }
  }// END OF METHOD


  public function profPic(){
    $sql = 'SELECT picture FROM users WHERE user_id = ?';
    $id = $_SESSION['id'];

    $stmt = self::connect()->prepare($sql);
    if (!$stmt->execute(array($id))) {
      echo "Fialed to load picture";
    }else {
        $data = $stmt->fetch();
        $pic = $data['picture'];
        return $pic;

     }
   }// END OF METHOD


}// END OF CLASS
