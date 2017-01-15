<?php 
	$hostname = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "db_klhk";
	mysql_connect($hostname, $user_db, $pass_db);
	mysql_select_db($db_name)
	or die("Gagal Terhubung Ke Database : ".mysql_error());
 ?>