<?php
session_start();
$type = "";
$check = 1;

include("connect.php");

$query = "select * from profile where". 
			" parent_fname like '".mysql_real_escape_string($_POST["account_fname"])."' and parent_lname like '".mysql_real_escape_string($_POST["account_lname"])."'";
$result = mysql_query($query) or die(mysql_error());
$num_result = mysql_num_rows($result);

	if ($num_result > 0){
		echo mysql_real_escape_string($_POST["account_fname"])."_".mysql_real_escape_string($_POST["account_lname"])."0".$num_result;
	}
		
	
	else{
		echo mysql_real_escape_string($_POST["account_fname"])."_".mysql_real_escape_string($_POST["account_lname"]);
	}
?>
