<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname ="";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Error:".$conn->connect_error);
  }
  $id = $_GET["id"];
  $sql = "SELECT * FROM users WHERE id = '$id'";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $fname = $row["firstname"];
      $lname = $row["lastname"];
      $email = $row["email"];
    }
  }else{
    echo "zero results";
  }
?>
<!doctype html>
<html>
  <body>
    <form action = "updateuser.php" method = "post">
      <table width = "300" border = "0" cellpadding = "1" cellspacing = "1">
        <tr>
          <td>First name</td>
          <td><input type = "text" name = "fname" value = "<?php echo $fname?>"></td>
        </tr>
        <tr>
          <td>Last name</td>
          <td><input type = "text" name = "lname" value = "<?php echo $lname?>"></td>
        </tr>
        <tr>
          <td>email</td>
          <td><input type = "text" name = "email" value = "<?php echo $email?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type = "submit" value = "UPDATE"></td>
        </tr>
      </table>
      <input type = "hidden" name = "id" value = "<?php echo $id?>">
    </form>
  </body>
</html>
