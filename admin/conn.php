<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName= "salma_mulia";
	$con = mysql_connect($host,$user,$pass);
	mysql_select_db($dbName, $con) or die ("Connect Failed!! : ".mysql_error());
?>