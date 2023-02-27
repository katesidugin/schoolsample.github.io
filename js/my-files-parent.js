$(document).ready(function(){
	
	$("#pdf_conduct").click(function(event){
		window.open('pdf_conduct.php', '_blank');
		
	});
	
	$("#pdf_handbook").click(function(event){
		window.open('pdf_handbook.php', '_blank');
		
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