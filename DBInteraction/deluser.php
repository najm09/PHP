<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";
// create database connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
  die("Error:".$conn->connect_error);
}

$id = $_GET["id"];
$sql = "DELETE FROM users WHERE id = '$id'";
if($conn->query($sql) === TRUE){
  header("location:delete.php");
}else{
  echo "Error deleting records".$conn->error;
}
$conn->close();
?>