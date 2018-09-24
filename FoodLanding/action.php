<?php
   if(isset($_POST['submit']))
   {
   error_reporting(E_ALL ^ E_DEPRECATED);
      $username = "root";
      $password = "Shishu2018@";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("ho", $connector)
        or die("Unable to connect");

$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$pho=$_POST['p_no'];
$rawdate =$_POST['c_in'];

$rawdate2 = $_POST['c_out'];
$state=$_POST['State'];
$City=$_POST['City'];
$street=$_POST['Street'];
$zip=$_POST['zip'];
$a=mysql_query("INSERT INTO guest(first_name,last_name,middle_name,phone_no,street,city,state,zip_code,din,dout) VALUES ('$first_name','$middle_name','$last_name','$pho','$street','$City','$state','$zip','$rawdate','$rawdate2')");
if (!$a)
  {
 echo mysql_error();
  }
else
{
    echo "1 record added";
}
}
?>