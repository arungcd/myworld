<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

          
</head>
<body>
<form method="POST">

<select name="taskOption" ?> 
    <?php
      error_reporting(E_ALL ^ E_DEPRECATED);
      $username = "root";
      $password = "Shishu2018@";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("ho", $connector)
        or die("Unable to connect");

$sql = "SELECT first_name FROM guest";
$result = mysql_query($sql);
echo "<option>" . "vhfjhfjh" ."</option>";
   
while ($row = mysql_fetch_array($result)) {
     echo "<option value='" . $row['first_name'] ."'>" . $row['first_name'] ."</option>";
}

?>
</select>
<input type="submit" name="" value="sub">
</form>

<?php
   $option = isset($_POST['taskOption']);
   if ($option) {
echo($option);
$pl=$_POST['taskOption'];
echo $pl;
 $result = mysql_query("select * from room where ID=(select ID from guest where guest.first_name='$pl')");

   } else {
     echo "task option is required";
     exit; 
   }
   ?>
<div class="container">
       <table  class="table table-hover">
      <thead>
        <tr>
          
          <th>ROOM_ID</th>
          <th>TYPE</th>
          <th>VIEW</th>
          <th>FLOOR</th>
          <th>RATE</th>
        </tr>
      </thead>
      <tbody>
        <?php

                while($row = mysql_fetch_assoc($result)) {

    echo
            "<tr>
              <td>{$row['ROOM_ID']}</td>
              <td>{$row['type']}</td>
              <td>{$row['view']}</td>
              <td>{$row['floor']}</td>
              <td>{$row['rate']}</td>
              
            </tr>";
          }
       
    
 ?>
        
            
      </tbody>
    </table>
    </div>

</body>
</html>