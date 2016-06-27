<?php if(file_exists('../config.php')){ include_once( '../config.php' );}else{header("location: install.php");} ?>
<?php
$db = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
function dbconn($server,$database,$user,$pass){
	$db = mysql_connect($server,$user,$pass);
	$db_select = mysql_select_db($database,$db);
	return $db;
}