$(document).ready(function(){
	if ($("#cUser").val()){
		
		if ($("#cUser").val() == "Administrator "){
			$("#login_lock").addClass("fa fa-user");
			$("#login_index").html($("#cUser").val());
			$("#login_index").prop("href", "my-profile.php");
			$("#parents_resources2").prop("href", "my-profile.php");
			$("#parents_resources").addClass("hidden");
			
		}
		
		else{
			$("#login_lock").addClass("fa fa-user");
			$("#login_index").html($("#cUser").val());
			$("#login_index").prop("href", "my-profile-parent.php");
			$("#parents_resources2").prop("href", "my-profile-parent.php");
			$("#parents_resources").addClass("hidden");
			
		}
		
	}
	
	else{
		$("#login_lock").addClass("icon-lock");
		$("#login_index").html("Login");
		$("#login_index").prop("href", "login-register.html");
		$("#parents_resources2").prop("href", "login-register.html");
		$("#parents_resources").removeClass("hidden");
		
	}
	
	$("#login_index").click(function(){
		
		if ($("#cUser").val()){
			
			if ($("#cUser").val() == "Administrator "){
				
				$("#login_lock").addClass("fa fa-user");
				$("#login_index").html($("#cUser").val());
				$("#login_index").prop("href", "my-profile.php");
				$("#parents_resources").addClass("hidden");
				
			}
			
			else{
				
				$("#login_lock").addClass("fa fa-user");
				$("#login_index").html($("#cUser").val());
				$("#login_index").prop("href", "my-profile-parent.php");
				$("#parents_resources").addClass("hidden");
				
			}
			
		}
		
		else{
			$("#login_lock").addClass("icon-lock");
			$("#login_index").html("Login");
			$("#login_index").prop("href", "login-register.html");
			$("#parents_resources").removeClass("hidden");
			
		}
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
	
	$("#see_more_alaminos").click(function(){
		location.href = "alaminos.php";
	});
	
	$("#see_more_dagupan").click(function(){
		location.href = "dagupan.php";
	});
	
	$("#see_more_sancarlos").click(function(){
		//alert("asd");
		location.href = "san-carlos.php";
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
