<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
      $username = "root";
      $password = "Shishu2018@";
      $host = "localhost";
      $db="ho";
      $connector = mysqli_connect($host,$username,$password,$db)
          or die("Unable to connect");
        echo "Connections are made successfully::";
     



      $first_name=$_POST['first_name'];
      $middle_name=$_POST['middle_name'];
      $last_name=$_POST['last_name'];
      $Email=$_POST['Email'];
      $p_no=$_POST['p_no'];
      $c_in=$_POST['c_in'];
      $c_out=$_POST['c_out'];
      $Street=$_POST['Street'];
      $City=$_POST['City'];
      $State=$_POST['State'];
      $zip=$_POST['zip'];
      $optradio=$_POST['optradio'];
      $view=$_POST['view'];
      $Floor=$_POST['Floor'];
      $query="INSERT INTO guest(first_name,last_name,middle_name,phone_no,street,city,state,zip_code,din,dout,Email) VALUES ('$first_name','$middle_name','$last_name','$p_no','$Street','$City','$State','$zip','$c_in','$c_out','$Email')";

      $a=mysqli_query($connector,$query);
      $query1="Select * from guest where Email='".$Email."'";

      $id=mysqli_query($connector,$query1);
 		$num_rows_em = mysqli_fetch_assoc($id);
 		echo $num_rows_em['ID'];
	echo "<br>";

    $room_qu="select * from room where type='".$optradio."' and view='".$view."' and floor='".$Floor."' order by ROOM_ID asc limit 1";
    $roome=mysqli_query($connector,$room_qu);

    $num_rows_rom = mysqli_fetch_assoc($roome);
 		echo $num_rows_rom['ROOM_ID'];
 		echo "<br>";

     $b="UPDATE room set ID='".$num_rows_em['ID']."' where ROOM_ID='".$num_rows_rom['ROOM_ID']."'";
     $last=mysqli_query($connector,$b);

?>