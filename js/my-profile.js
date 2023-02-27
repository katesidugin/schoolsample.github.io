$(document).ready(function(){
	
	$("#cnew_password").keyup(function(){
		if ($("#cnew_password").val() != $("#new_password").val()){
			$("#err_message").html("Password doesn't match.");
			$("#btn_update").prop('disabled',true);
		}
		
		else{
			$("#err_message").html("");
			$("#btn_update").prop('disabled',false);
		}
		
	});
	
	$("#btn_update").click(function(){
		
		if (!$("#new_username").val() && !$("#new_password").val()){
			$("#err_message").html("Fill username/password to update.");
		}
		
		else{
			
			if ($("#new_password").val() && !$("#cnew_password").val()){
				$("#err_message").html("Confirm password.");
			}
			
			else{
				$("#err_message").html("");
			
				$newUsername = $("#new_username").val();
				if (!$("#new_username").val()){
					$newUsername = $("#old_username").val();
				}
				
				$newPassword = $("#new_password").val();
				if (!$("#new_password").val()){
					$newPassword = $("#old_password").val();
				}			
			
				$.ajax({
					type: "POST",
					url: "php/update_profile.php",
					data: "idNo="+$("#user_id").html()+
							"&newUsername="+$newUsername+
							"&newPassword="+$newPassword
					,
					success : function(text) {
						if (text== "success"){
							$("#err_message").html("Successfully updated.");
							FillProfile();
						}
							
						
						else{
							alert(text);
							$("#err_message").html("User exists.");
							
						}
						
					},
					beforeSend:function() {
						
					},
					error: function (xhr, ajaxOptions, thrownError) {
						alert(xhr.status);
						alert(thrownError);
					}
				});
				
			}
			
			
				
		}
		
		
	});
	
	$("#btn_logout").click(function(){
		ResetLogin();
		
		setTimeout(function() {
		  window.location.href = "login-register.html";
		}, 100);
		
		
	});
	
	$("#btn_subscribe").click(function(){
		if (!$("#subscriber").val()){
			swal({
			  title: "<span style='color:#0070bb'>Please fill out E-mail Address!<span>",
			  text: "",
			  html: true,
			  type: "warning"
			});
		}
		
		else{
			addSubscriber();
			
		}
		
		
	});
	
});

function addSubscriber(){
	
	$.ajax({
		type: "POST",
		url: "php/add_subscriber.php",
		data: "subscriber="+$("#subscriber").val()
		,
		success : function(text) {
			if (text == "success"){
				swal({
			  title: "<span style='color:#0070bb'>Thank you for subscribing on our E-mail Announcements.<span>",
			  text: "",
			  html: true,
			  type: "success"
			});
			}
				
			else{ alert(text);}
			
		},
		beforeSend:function() {
			
		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);
		}
	});
	
}

function FillProfile(){
	$.ajax({
		type: "POST",
		url: "php/search_profile.php",
		data: "idNo="+$("#user_id").html()
		,
		success : function(text) {
			
			var arr = JSON.parse(text);
			
			
			$("#old_username").val(arr[0].cUsername);
			$("#old_password").val(arr[0].cPassword);
			$("#new_username").val("");
			$("#new_password").val("");
			$("#cnew_password").val("");
			
			$("#err_message").html("");
			
		},
		beforeSend:function() {
			
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
	});
	
}

function ResetLogin(){
	$.ajax({
		type: "POST",
		url: "php/reset_login.php",
		data: "temp="
		,
		success : function(text) {
			
		},
		beforeSend:function() {
			
		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);
		}
	});
	
}