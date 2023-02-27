$(document).ready(function(){
	
	$("#p_fname").keyup(function(){
		$("#err_message").html("");
		
	});
	
	$("#btn_gen_account").click(function(){
		if (!$("#p_fname").val() || !$("#p_lname").val()){
			$("#err_message").html("Fill first / last name of parent.");
		}
		
		else{
			$("#err_message").html("");
			$temp_username = $("#p_fname").val() +"_"+ $("#p_lname").val()
			
			$.ajax({
				type: "POST",
				url: "php/check_account.php",
				data: "account_fname="+$("#p_fname").val()+
						"&account_lname="+$("#p_lname").val()
						
				,
				success : function(text) {
					$("#acc_username").val(text);
					generatePassword();
					
				},
				beforeSend:function() {
					
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert(xhr.status);
					alert(thrownError);
				}
			});
			
		}
		
	});
	
	$("#btn_add_account").click(function(){
		if (checkedFields()){
			$("#err_message").html("");
			addAccount();
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
	
	fillSubscriber();
	
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

function fillSubscriber(){
	$.ajax({
		type: "POST",
		url: "php/fill_subscribers.php",
		data: "temp="
		,
		success : function(text) {
			$("#table_area").html(text);
		},
		beforeSend:function() {
			
		},
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);
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

function checkedFields(){
	if (!$("#p_fname").val()){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	if (!$("#p_lname").val()){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	if (!$("#s_name").val()){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	if (!$("#s_id").val()){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	if ($("#opt_type").val() == "type_acc"){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	if (!$("#acc_username").val()){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	if (!$("#acc_password").val()){
		$("#err_message").html("Fill required fields.");
		return false;
	}
	
	return true;
}

function addAccount(){
	
	cMode = "add";
	if ( $("#id_account").val() != "" )
		cMode = "update";
	
	$.ajax({
		
		type: "POST",
		url: "php/add_account.php",
		data: "pFname="+$("#p_fname").val()+
				"&pLname="+$("#p_lname").val()+
				"&sName="+$("#s_name").val()+
				"&sId="+$("#s_id").val()+
				"&cpNum="+$("#cell_no").val()+
				"&address="+$("#address").val()+
				"&accType="+$("#opt_type").val()+
				"&username="+$("#acc_username").val()+
				"&password="+$("#acc_password").val()+
				"&id="+$("#id_account").val()+
				"&mode="+cMode
				
		,
		success : function(text) {
			if (text == "success"){
				$("#err_message").html("Account Added.");
				$("#p_fname").val("");
				$("#p_lname").val("");
				$("#s_name").val("");
				$("#s_id").val("");
				$("#cell_no").val("");
				$("#address").val("");
				$("#opt_type option[value='type_acc']").attr('selected',true);
				$("#acc_username").val("");
				$("#acc_password").val("");
			}
			
			else if (text=="exists"){
				$("#err_message").html("Username already exists.");
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

function generatePassword(){
	
	$.ajax({
		type: "POST",
		url: "php/generate_password.php",
		data: "temp="
				
		,
		success : function(text) {
			$("#acc_password").val(text);
			
			
		},
		beforeSend:function() {
			
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
	});
}


