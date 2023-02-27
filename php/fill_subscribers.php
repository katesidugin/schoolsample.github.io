<?php 
	$check = 0;
	$counter = 0;
	include("connect.php");
		
	
	$query = "select * from subscriber order by email";
	
	$result = mysql_query($query) or die(mysql_error());
	
	$cS = "<table class=\"table_alumni\">";	
	while ( $row = mysql_fetch_assoc($result) ) {
		$counter ++;
		$cS .= "<tr>";
		$cS .= "<td class=\"col-md-1\">".$counter."</td>";
		$cS .= "<td>".$row["email"]."</td>";
		$cS .= "</tr>";
		$check = 1;
		
	}
	
	if ( $check == 0 ) {
		echo "no data available";
		die;
	}

	$cS .= "</tbody>
			</table>";
	echo $cS;
?>