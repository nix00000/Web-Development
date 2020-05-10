<?php

class Accounts {
  public static $roomType;
  public static $bookedRooms;




  private $r;
   function __construct($r){
     $this->_r = $r;
   }

   public function login() {

     if (isset($_POST['submit'])) {

       if ($_POST['email']!=="" && $_POST['pwd']!=="") {
         $email = addslashes(strip_tags($_POST['email']));
         $pwd = addslashes(strip_tags($_POST['pwd']));

           $s = "SELECT * FROM users WHERE email=? AND password=?";
           $sql = $this->_r->prepare($s);
           $sql->execute(array($email,$pwd));
           echo $sql->rowCount();

           if ($sql->rowCount()) {
             echo "aa";
             $data = $sql->fetch();
             $_SESSION['email'] = $data['email'];

             header ('location:home.php');
         }else {
           echo "Invalid Username or Password";
         }
       } else {
         echo "Please fill out all the fields";
       }


     }

   }
   // END OF login

   // START OF Register
   public function register () {
     if (isset($_POST['submitr'])) {

       $fnm = addslashes(strip_tags($_POST['fname']));
       $lnm = addslashes(strip_tags($_POST['lname']));
       $email = addslashes(strip_tags($_POST['emailr']));
       $pwd = addslashes(strip_tags($_POST['pwdr']));

       if ($fnm !=="" && $lnm !=="" && $email !=="" && $pwd!=="") {


         $s = "INSERT INTO users (firstName,lastName,email, password) VALUES (?,?,?,?)";
         $sql = $this->_r-> prepare($s);
         $sql->execute(array($fnm,$lnm,$email,$pwd));

         echo "Successfully registered";



       }else {
         echo "Please fill all the information";
       }

     }


   }


   // START OF ROOMS
   public function roomcheck () {
     $sa = "SELECT * FROM rooms";
     $sqli = $this->_r->prepare($sa);
       $sqli->execute();


       while($row = $sqli->fetch()) {
            echo $row['room_type']." has ".$row['totalRooms']." rooms available"."<br>";
    }

  }

  public function book() {
    if (isset($_POST['book'])) {


      if (isset($_POST['options']) && isset($_POST['options2']) && isset($_POST['options3'])) {
        $mail = $_SESSION['email'];
        $type = $_POST['options'];
        $nr = $_POST['options2'];
        $ng = $_POST['options3'];


        $chi = $_POST['checkin'];
        $cho = $_POST['checkout'];

      if ($chi > $cho) {
        echo "<p class='feedbackB'> Invalid dates </p>";
      }else {
        $s2="SELECT * FROM booking WHERE email = ? AND checkin = ? AND checkout = ? ";
        $sql2 = $this->_r->prepare($s2);
        $sql2->execute(array($mail,$chi,$cho));
        if ($row = $sql2->fetch()) {
          echo "<p class='feedbackB'> This booking already exists </p>";
        }else {
          $s = "INSERT INTO booking (email,roomType,noRooms,noGuests,checkin,checkout) VALUES (?,?,?,?,?,?);";
          $sql = $this->_r->prepare($s);

          if ($sql->execute(array($mail,$type,$nr,$ng,$chi,$cho))) {
            echo "<p class='feedbackG'>Successfully booked!</p>";

            $s3 = "UPDATE rooms SET totalRooms = totalRooms-$nr WHERE room_type = ?";
            $sql3 = $this->_r->prepare($s3);
            $sql3->execute(array($type));



          }else {
            echo "<p class='feedbackB'> booking failed </p>";
          }

        }

      }



    } else {
      echo "<p class='feedbackB'>Please fill out all the fields </p>";
    }

    }

  }


  public function manage(){
    $mail = $_SESSION['email'];

    $s="SELECT * FROM booking WHERE email = ?";
    $sql = $this->_r->prepare($s);
    $sql->execute(array($mail));

    echo "<table>";
    echo "<tr><td class='man_dat' style='background-color:lightgrey;'>Room Type</td><td class='man_dat' style='background-color:lightgrey;'>Check In</td><td class='man_dat' style='background-color:lightgrey;'>Check Out</td> </tr>";
    while ($row = $sql->fetch()){

      echo "<tr>"."<td class='man_dat'>".$row['roomType']."</td>"."<td class='man_dat'>".$row['checkin']."</td>"."<td class='man_dat'>" .$row['checkout']."</td>"."</tr>";

    }
    echo "</table>";



  }










}
