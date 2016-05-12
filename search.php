<?php
require_once 'cn.php';

$year = ($_POST['year1']);
$player = ($_POST['player1']);

$sql = "SELECT Par, Major, Country 
FROM Datamart
WHERE Year ='$year' AND Player ='$player'";


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
          <th>Country</th>
          <th>Major</th>
          <th>Par</th>
        <tr>
  
<?php
          while($Datamart = mysql_fetch_assoc($result)){
            echo "<tr>";
              echo"<td>".$Datamart['Country']."</td>"; 
              echo"<td>".$Datamart['Major']."</td>";
              echo"<td>".$Datamart['Par']."</td>"; 
            echo "</tr>";
          }
        ?>
    </table>
     <?php mysql_close($cn); ?>




</body>
</html>









