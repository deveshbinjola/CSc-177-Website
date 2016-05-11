<?php
$cn = mysql_connect('localhost','root','sunny') or
	die('Connection unsuccessful');

mysql_select_db('golfdatabase', $cn) or
	die(mysql_error($cn));

?>