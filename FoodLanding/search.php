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

echo "<option value='".none."'>" . "Search by.." ."</option>";
 echo "<option value='".ID."'>" ."ID"."</option>"; 
 echo "<option value='".name."'>" ."Names"."</option>"; 
 echo "<option value='".city."'>" ."City"."</option>"; 
 echo "<option value='".street."'>" ."Street"."</option>"; 
 echo "<option value='".state."'>" ."State"."</option>"; 
echo "<option value='".phone_no."'>" ."Phone No"."</option>"; 



?>
</select>

<input type="text" name="text"  placeholder="Search...">
<input type="submit" name="" value="sub">
</form>

<?php
   $option = isset($_POST['taskOption']);
   



   if ($option) {
$pl=$_POST['taskOption'];
$var=$_POST['text'];

if (strcmp($_POST['taskOption'], 'none')==0) {
  echo "Please select an option";
       exit; 

}
 elseif (empty($var)) {
  echo "Please enter a Searchable name in search box";
    exit;
 }

 else{

if(strcmp($pl,'ID')==0)
{
 $result = mysql_query("select * from room where ID='$var'");
}

elseif(strcmp($pl,'name')==0)
{
 $result = mysql_query("select * from room where ID=(select ID from guest where guest.first_name like '%$var%')"); 
  
}

}



  }



   
   else {
     echo "Select an option";
     exit; 
   }
   ?>
}
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