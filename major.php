<?php

require_once 'cn.php';

$major = ($_POST['major']);
$year = ($_POST['year']);
$player = ($_POST['player']);


$sql = SELECT Year, Player, Par, Country 
FROM Datamart
WHERE Major = "major";


$sql1 = SELECT Player, Major 
FROM Datamart
WHERE Year ='year';

$sql2 = SELECT Year, Major, Par, Country
FROM Datamart
WHERE Player = "player";

$sql3 = SELECT Year, Major, Par, Country
FROM Datamart
WHERE Player = "player" AND Year ="year";

$result = mysql_query($sql, $cn) or 
		die(mysql_error($cn));
$result = mysql_query($sql1, $cn) or 
        die(mysql_error($cn));
$result = mysql_query($sql2, $cn) or 
        die(mysql_error($cn));
$result = mysql_query($sql3, $cn) or 
        die(mysql_error($cn));

?>

<<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<h2>Here are your results.</h2>>
<a href="index.html">Back</a>>
</body>
</html>>