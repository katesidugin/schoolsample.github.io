$(document).ready(function(){
	$("#login_username").focus();
	
	$("#btn_login").click(function(){
		if (login_check()){
			$("#err").html("");
			login_admin();
		}
		
	});
	
});

function login_check(){
	
	if (!$("#login_username").val()){
		$("#err").html("Invalid...");
		$("#login_username").focus();
		return false;
	}
	
	if (!$("#login_password").val()){
		$("#err").html("Invalid...");
		$("#login_password").focus();
		return false;
	}
	
	return true;
}

function login_admin(){
	
	$.ajax({
		type: "POST",
		url: "php/login_admin.php",
		data: "username="+$("#login_username").val()+
				"&password="+$("#login_password").val()
		,
		success : function(text) {
			if (text == "success"){
				$("#err").html("Logging in...");
			}
				
			else{ 
				$("#err").html(text);
				
			}
			
		},
		beforeSend:function() {
			$("#err").html("Checking...");
		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);
		}
	});
}