<?php
	$conn = @mysql_connect("localhost","root","");
	mysql_select_db("ednasschool");
	
	if (!$conn) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	} 
?>