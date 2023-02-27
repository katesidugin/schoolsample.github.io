<?php
	
	echo random_password(8);

	function random_password($length=8){
		$chars="abcdefghijklmnopqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXY0123456789!@#$%^&*()?";
		$password = substr(str_shuffle($chars),0,$length);
		return $password;
		
	}
?>