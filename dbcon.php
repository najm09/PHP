<!Doctype html>
<html>
  <head>
    <style>
      table{
        width : 500px ;
        border-collapse : collapse ;
      }
      table, td, th{
        border : 1px solid black;
        padding : 10px;
      }
      th{
        text-align : left;
      }
    </style>
  </head>

  <body>
    <?php
    $q = intval($_REQUEST["q"]);

    $conn = mysqli_connect('localhost', 'root', 'test3');
    if(!$conn){
      die("connection error:".mysqli_error($conn));
    }
    mysqli_select_db($conn, "test.db");
    $sql = "SELECT * FROM students WHERE id = '$q' ";
    $result = mysqli_query($conn, $sql);
   
    echo "<table>
    <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Marks</th>
    </tr>";
    while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>" .$row['id']. "</td>";
      echo "<td>" .$row['firstname']. "</td>";
      echo "<td>" .$row['lastname']. "</td>";
      echo "<td>" .$row['marks']. "</td>";
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
    ?>
  </body>
</html>