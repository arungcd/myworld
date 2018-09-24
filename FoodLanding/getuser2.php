<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 50%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$b=$_GET['b'];
$c=$_GET['c'];
$con = mysqli_connect('localhost','root','Shishu2018@','ho');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ho");


$num_rows=0;
$sql="SELECT * FROM room WHERE floor = '".$q."' and  view= '".$b."' and type= '".$c."'  ";
$result = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($result);
if($num_rows <= 0)
{
echo"<h3>No match found for the preferrred view and floor</h3>";
}
else
{   
echo "<table>
<tr>
<th>ROOM_ID</th>
<th>Type</th>
<th>View</th>
<th>Floor</th>
<th>Rate</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ROOM_ID'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['view'] . "</td>";
    echo "<td>" . $row['floor'] . "</td>";
    echo "<td>" . $row['rate'] . "</td>";
   
    echo "</tr>";
}
echo "</table>";
echo"Rooms are available!!";
}
mysqli_close($con);
?>
</body>
</html> 