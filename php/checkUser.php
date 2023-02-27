<?php
session_start();
$type = "";

include("connect.php");


$query = "select * from profile where username = '".mysql_real_escape_string($_POST["username"])."' and password = '".mysql_real_escape_string($_POST["password"])."'";
$result = mysql_query($query) or die(mysql_error());
$num_rows = mysql_num_rows($result);
$row = mysql_fetch_assoc($result);

if ( $num_rows > 0 ) {
	$_SESSION["user"][0][0] = ucwords($row["parent_fname"]) . " " . ucwords($row["parent_lname"]);
	$_SESSION["user"][0][1] = $row["id"];
	$_SESSION["user"][0][2] = $row["username"];
	$_SESSION["user"][0][3] = $row["password"];
	$_SESSION["user"][0][4] = ucwords($row["student_name"]);
	$_SESSION["user"][0][5] = $row["student_id"];
	$_SESSION["user"][0][6] = ucwords($row["address"]);
	$_SESSION["user"][0][7] = $row["cell_no"];
	
		
	$type = $row["type"];
	/*$query1 = "insert into log (name, type, date) values(".
				"'".mysql_real_escape_string($row["name"])."',".
				"'".mysql_real_escape_string($row["type"])."',".
				"'".date("Y/m/d H:i:s")."')";
	$result1 = mysql_query($query1) or die(mysql_error());*/
	
	echo $type;
}

?>
