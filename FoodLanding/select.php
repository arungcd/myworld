
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






        $id = $_GET['customerId'];
        $sql = 'SELECT * FROM guest WHERE ID = ' . $id;
        $result = mysql_query($sql)

        $json = array();
        while ($row = $result->fetch_assoc()) {
          $json[] = array(
            'id' => $row['ID'],
            'reg' => $row['first_name'] // Don't you want the name?
          );
        }
        echo json_encode($json);

?>