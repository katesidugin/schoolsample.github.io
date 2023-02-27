<?php
	include("connect.php");
	
	$query1 = "select * from profile where". 
			" username like '".mysql_real_escape_string($_POST["username"])."'";
	$result1 = mysql_query($query1) or die(mysql_error());
	$num_result1 = mysql_num_rows($result1);

	if ($num_result1 > 0){
		echo "exists";
		
	}
	
	else{
		if ( $_POST["mode"] == "add" ) {
			$query = "insert into profile (parent_fname, parent_lname, student_name, student_id, username, password, type, cell_no, address) values(".
					"'".mysql_real_escape_string($_POST["pFname"])."',".
					"'".mysql_real_escape_string($_POST["pLname"])."',".
					"'".mysql_real_escape_string($_POST["sName"])."',".
					"'".mysql_real_escape_string($_POST["sId"])."',".
					"'".mysql_real_escape_string($_POST["username"])."',".
					"'".mysql_real_escape_string($_POST["password"])."',".
					"'".mysql_real_escape_string($_POST["accType"])."',".
					"'".mysql_real_escape_string($_POST["cpNum"])."',".
					"'".mysql_real_escape_string($_POST["address"])."')";
					
			$result = mysql_query($query) or die(mysql_error());
			if ( $result ) {
				echo "success";
			}
		
		}
		
		else {
			$query = "update profile set ".
					"parent_fname='".mysql_real_escape_string($_POST["pFname"])."',".
					"parent_lname='".mysql_real_escape_string($_POST["pLname"])."',".
					"student_name='".mysql_real_escape_string($_POST["sName"])."',".
					"student_id='".mysql_real_escape_string($_POST["sId"])."',".
					"username='".mysql_real_escape_string($_POST["username"])."',".
					"password='".mysql_real_escape_string($_POST["password"])."',".
					"type='".mysql_real_escape_string($_POST["accType"])."',".
					"cell_no='".mysql_real_escape_string($_POST["cpNum"])."',".
					"address='".mysql_real_escape_string($_POST["address"])."' ".
					"where id='".mysql_real_escape_string($_POST["id"])."'";
			$result = mysql_query($query) or die(mysql_error());
			if ( $result ) {
				echo "success";
			}
		}
	}
	
	
?>