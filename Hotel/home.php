<?php
include 'include/db.php';


if (!isset($_SESSION['email'])) {
  header('location:index.php');
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>

     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <style media="screen">
      body {
        height: 1500px;
        font-size: 2em;
      }
      option {
        width:100px;
      }
        #conta {
          width:450px;
          background-color: lightgrey;
          padding: 30px;
          align-content: center;

        }
        #conta form {
          margin-left: 30px;

        }
        #conta table {
          width:400px;

        }
        #rrr {
          height:400px;

        }
        #qqqq {
          top:20%;
          background-color: black;
          height: 70px;
        }
        #qqqq h2 {
          margin:0px;
        }

        .welcome {
          color:green;
        }

        #op {
          width:100px;
        }
        .opt {
          width:100px;
          height:40px;
        }

        #book {
          margin-left: 100px;
          width:120px;
          font-size: 1.2em;
        }

        .available {
          height:100px;
          width:100%;
          border:1px solid green;
          background-color: #ccffcc;
        }

        .manage {

          width:100%;
          border:1px solid green;
        }

        #managing {
          margin-left: 330px;
          width :600px;
        }


        .man_dat {
          width: 200px;
          padding:5px;
          border: 1px solid black;
          text-align: center;
        }

        .feedbackG {
          color:green;
          text-align: center;

        }
        .feedbackB {
          color:red;
          text-align: center;

        }


      </style>
   </head>
   <body>



 <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="#">WebSiteName</a>
     </div>
     <ul class="nav navbar-nav">
       <li class="active"><a href="#">Home</a></li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#">Page 1-1</a></li>
           <li><a href="#">Page 1-2</a></li>
           <li><a href="#">Page 1-3</a></li>
         </ul>
       </li>
       <li><a href="#">Page 2</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
       <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
     </ul>
   </div>
 </nav>

 <?php

 echo "<h2 class='welcome'> Welcome ".$_SESSION['email']." ! </h2>";


  ?>

<!-- Carousel starts -->
 <div class="container">
   <h2>Carousel Example</h2>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner" id = "rrr">

       <div class="item active">
         <img src="img/2.jpg" alt="Los Angeles" style="width:100%;">
         <div class="carousel-caption" id="qqqq">
           <h2>Sea View for only 80$/per night* </h2>
         </div>
       </div>

       <div class="item">
         <img src="img/1.jpg" alt="Chicago" style="width:100%;">
         <div class="carousel-caption" id="qqqq">
           <h2>Garden View for only 50$/per night* </h2>
         </div>
       </div>

       <div class="item">
         <img src="img/3.webp" alt="New York" style="width:100%;">
         <div class="carousel-caption" id="qqqq">
           <h2>Street View for only 30$/per night* </h2>
         </div>
       </div>

     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
 </div>


<div class="available">
  <?php
    $O->roomcheck();

   ?>

</div><br>


<!-- Room registration -->
 <div class="container" id="conta">
   <form method="POST">

     <table>
       <tr class="form-group">
         <td class="opt"><label for="checkin">Check-In date: </label></td>
         <td class="opt"><input type="date" name="checkin" id="datefield"></td>
       </tr>
       <tr class="form-group">
         <td class="opt"><label for="checkout" >Check-out date: </label></td>
         <td class="opt"><input type="date" name="checkout" id="datefield2"></td>
       </tr>
     </table>


     <br>

     <!-- Room data -->

     <table>
       <tr class="form-group op" >
         <td id="op"><label for="options">Room type: </label></td>
         <td id="op"><select class="" name="options">
           <option value="" selected disabled hidden>Choose here</option>
           <option value="Garden View" >Garden View</option>
           <option value="Sea View">Sea View</option>
           <option value="Street View">Street View</option>
         </select></td>
       </tr>
       <tr class="form-group" >
         <td id="op"><label for="options2">No. of rooms: </label></td>
         <td id="op"><select class="" name="options2">
           <option value="" selected disabled hidden>Choose here</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
         </select></td>
       </tr>

       <tr class="form-group" >
         <td id="op"><label for="options3">No. of guests: </label></td>
         <td id="op"><select class="" name="options3">
           <option value="" selected disabled hidden>Choose here</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
         </select></td>
       </tr>
     </table><br><br>


     <button type="submit" class="btn btn-default" id="book" name ="book">Book</button>

   </form>

 </div><br><br>
 <?php
 $O->book();
  ?>

 <div class="manage">
   <div class="container" id="managing">
     <br>
     <p style="width:200px;"> Your Bookings are: </p>
     <?php
     $O->manage();

      ?>
      <br>

   </div>

 </div>


 <script type="text/javascript">
 var today = new Date();
var dd = today.getDate();
var dd2 = today.getDate()+1;

var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield").setAttribute("min", today);

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("datefield2").setAttribute("min", today);



 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
