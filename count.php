<?php
require_once 'cn.php';

$major = ($_POST['major1']);
$player = ($_POST['player2']);

$sql = "SELECT Major, COUNT(Major) AS Count
FROM Datamart
WHERE Major ='$major' AND Player ='$player'";


$result = mysql_query($sql, $cn) or 
         die(mysql_error($cn)) ;

?>




<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Result</title>
    </head>
<body>


<table width="80%" border="1" cellpadding="1" cellspacing="1">
        <tr>
          <th>Major</th>
          <th>Count</th>
        <tr>
  
<?php
          while($Datamart = mysql_fetch_assoc($result)){
            echo "<tr>"; 
              echo"<td>".$Datamart['Major']."</td>";
              echo"<td>".$Datamart['Count']."</td>"; 
            echo "</tr>";
          }
        ?>
    </table>
     <?php mysql_close($cn); ?>




</body>
</html>









