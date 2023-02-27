<?php
session_start();
$type = "";
$check = 0;

include("connect.php");

$query = "select * from profile where". 
			" username like '".mysql_real_escape_string($_POST["newUsername"])."'";
$result = mysql_query($query) or die(mysql_error());
$num_result = mysql_num_rows($result);

	if ($num_result > 1){
		echo "exists";
		
	}
	
	else {
	$query1 = "update profile set ".
				"username='".mysql_real_escape_string($_POST["newUsername"])."',".
				"password='".mysql_real_escape_string($_POST["newPassword"])."' ".
				"where id like '".mysql_real_escape_string($_POST["idNo"])."'";
		$result1 = mysql_query($query1) or die(mysql_error());
		if ( $result1 ) {
			echo "success";
		}
	
	}

?>
