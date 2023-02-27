<?php
include("connect.php");

$query = "select * from users where". 
			" username like '".mysql_real_escape_string($_POST["username"])."' and password like '".mysql_real_escape_string($_POST["password"])."'";
$result = mysql_query($query) or die(mysql_error());
$num_result = mysql_num_rows($result);

	if ($num_result > 0){
		echo "success";
	}
		
	
	else{
		echo "not found";
	}
?>
