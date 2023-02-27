<?php
session_start();
$type = "";
$check = 0;

	include("connect.php");

	$query = "select * from profile where". 
				" id like '".mysql_real_escape_string($_POST["idNo"])."'";
	$result = mysql_query($query) or die(mysql_error());
	$num_result = mysql_num_rows($result);
	
	$cS = "[";
	while ( $row = mysql_fetch_assoc($result) ) {
		unset($_SESSION["user"]);
		$_SESSION["user"][0][0] = ucwords($row["parent_fname"]) . " " . ucwords($row["parent_lname"]);
		$_SESSION["user"][0][1] = $row["id"];
		$_SESSION["user"][0][2] = $row["username"];
		$_SESSION["user"][0][3] = $row["password"];
		$_SESSION["user"][0][4] = ucwords($row["student_name"]);
		$_SESSION["user"][0][5] = $row["student_id"];
		$_SESSION["user"][0][6] = ucwords($row["address"]);
		$_SESSION["user"][0][7] = $row["cell_no"];
		
		if ($cS != "[") {
			$cS .= ",";
		}
		$cS .= '{"cUsername":"'  . $row["username"] . '",';
		$cS .= '"cPassword":"'. $row["password"]     . '"}';
	}
	
	$cS .="]";
	
	echo $cS;

?>
