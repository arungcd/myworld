 <!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
        <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		      <title>database connections</title>
    </head>
    <body>
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

      //execute the SQL query and return records
      $result = mysql_query("SELECT ROOM_ID,type,view,floor,rate FROM room WHERE ID IS Null ");
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
          while( $row = mysql_fetch_assoc( $result ) ){
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
     
     <?php mysql_close($connector); ?>
    </body>
    </html>