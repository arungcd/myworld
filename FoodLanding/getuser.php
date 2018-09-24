<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
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

$con = mysqli_connect('localhost','root','Shishu2018@','ho');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
    echo "dssdfdsf";
}
mysqli_select_db($con,"ho");
$sql="SELECT first_name,last_name FROM guest WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
   
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html> 