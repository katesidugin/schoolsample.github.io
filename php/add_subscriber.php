<?php
	include("connect.php");
	
	
	$query = "insert into subscriber (email) values(".
			"'".mysql_real_escape_string($_POST["subscriber"])."')";
			
	$result = mysql_query($query) or die(mysql_error());
	if ( $result ) {
		echo "success";
	}
	
?>