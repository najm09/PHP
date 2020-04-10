<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";
  //form variables
  $fname  = validate($_POST["fname"]);
  $lname  = validate($_POST["lname"]);
  $email  = validate($_POST["email"]);
  $id = validate($_POST["id"]);
  

  //validation
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  //create database connection
  $conn = new mysqli($servername, $username,  $password, $dbname);
  //check connection
  if($conn->connect_error){
    die("Error".$conn->connect_error);
  }
  $sql = "UPDATE users SET firstname ='$fname', lastname = '$lname', email = '$email' WHERE id = '$id'";

  if($conn->query($sql) === TRUE){
    header("location:delete.php?message=success$id=".$id);
  }else{
    echo "connection error".$conn->error;
  }
  $conn->close();
?>