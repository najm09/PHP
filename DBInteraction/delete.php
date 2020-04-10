<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";
//create database connection
  $conn = new mysqli($servername, $username, $password, $dbname);
//check connection
  if($conn->connect_error){
    die("Error:".$conn->connect_error);
  }

  $sql = "SELECT id, firstname, lastname, email FROM users";
  $result = $conn->query($sql);
?>
<table width = "300" cellspacing = "1" cellpadding = "1" border = "1">
<?php
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
      <tr>
        <td>ID</td>
        <td><?php echo $row["id"]; ?></td>
        <td><a href = "deluser.php?id=<?php echo $row["id"];?>">DELETE</a></td>
      </tr>

      <tr>
        <td>firstname</td>
        <td><?php echo $row["firstname"]; ?></td>
        <td>&nbsp;</td>
      </tr> 

      <tr>
        <td>lastname</td>
        <td><?php echo $row["lastname"]; ?></td>
        <td>&nbsp;</td>
      </tr>  

      <tr>
        <td>Email</td>
        <td><?php echo $row["email"]; ?></td>
        <td>&nbsp;</td>
      </tr> 
  <?php 
    }
  ?>
</table>
<?php
  }else{
    echo "connection Error".$conn->error."<hr>";
  }
?>