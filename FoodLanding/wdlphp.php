<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  


<h2>Prime No Generator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Limit 1: <input type="text" name="name1">
  <br><br>
  Limit 2: <input type="text" name="name2">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
?>

<textarea rows="10" cols="200">



<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nam = primeno($_POST["name1"],$_POST["name2"]);
 
   
}

function primeno($n1,$n2){

  for($i=$n1;$i<=$n2;$i++){  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
          }
      
        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        
      if($counter==2){
                
               echo($i."\n");
        }

    }
} 



?>
</textarea>

</body>
</html>
