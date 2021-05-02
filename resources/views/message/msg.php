<?php
 
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

try {
    $msg = "";
    $msg = $_POST['msg'];
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `user`(`id`, `name`, `msg`) VALUES  (NULL,'shivam','".$msg."')";
  // use exec() because no results are returned
  $conn->exec($sql);
   echo "<script>console.log('faltu sql')</script>";
} catch(PDOException $e) {
    echo "<script>console.log('errorSQL')</script>";
}

$conn = null;
?>
