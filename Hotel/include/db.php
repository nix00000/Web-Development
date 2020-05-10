<?php
session_start();
ob_start();

$dbs = "localhost";
$dbu = "root";
$dbp = "";
$dbn = "hotel";

$conn = mysqli_connect($dbs,$dbu,$dbp,$dbn);

try {
  $conn = new PDO("mysql:host=$dbs;dbname=$dbn",$dbu,$dbp);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo $e->getMessage();
}


include 'classes/accounts.class.php';
$O = new Accounts($conn);
