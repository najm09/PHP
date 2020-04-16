<!Doctype html>
<html>
  <head>
    <script>
      function studentData(str){
        if(str == ""){
         document.getElementById("hint").innerHTML = "";
         return;
        }else{
          if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
          }
          else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
        }
        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("hint").innerHTML =  xmlhttp.responseText;
          }
        }
        xmlhttp.open("GET", "dbcon.php?q="+str, true);
        xmlhttp.send();
      }
    </script>
  </head>

  <body>
  
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "test3";
  $dbname = "test.db" ;

  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Error:".$conn->connect_error);
  }

  $sql = "SELECT firstname, lastname, id FROM students ORDER BY firstname";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    echo '<select name = "users" onchange = "studentData(this.value)">';
    echo "<option value = '0'>select name</option>";
    while($row = $result->fetch_assoc()){
     echo "<option value ='" .$row['id']. "'>" .$row['firstname']. " " .$row['lastname']. "</option>";
    }
    echo "</select>";
  }else{
    echo  "zero result";
  }
  $conn->close();
?>
  <br><br>

<div id = "hint"><b>Data will be displayed here</b></div>
  </body>
</html>

