$(document).ready(function(){
	$(document).keypress(function(e) {
		/*if(e.which == 13) {
			if ($("#username").val() == ""){
				$("#login_err").removeClass("hidden");
				alert("aaaa");
			}
			
		}*/
	});
	
	$("#btn_login").click(function(){
		$("#login_err").html("")
		
		if (checkedLogin()){
			checkUser();
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

function checkedLogin(){
	if (!$("#username").val()){
		$("#login_err").html("&nbsp &nbsp Fill Username/Password")
		return false;
	}
	
	else if (!$("#password").val()){
		$("#login_err").html("&nbsp &nbsp Fill Username/Password")
		return false;
	}
	
	return true;
}

function checkUser(){
	
	$.ajax({
        type: "POST",
        url: "php/checkUser.php",
        data: "username="+$("#username").val()+
				"&password="+$("#password").val()
        ,
        success : function(text) {
			
			if ( text != "" ) {
				$( "#login_err" ).html("Logging in...");
								
				if (text == "Administrator"){
					setTimeout(function() {
					  window.location.href = "my-profile.php";
					}, 500);
					
				}
				
				else if (text == "Parent"){
					setTimeout(function() {
					  window.location.href = "my-profile-parent.php";
					}, 500);
					
				}
				
				else{
					
					$( "#login_err" ).html(text);
				}
				
			}
			
			else {
				$( "#login_err" ).html("Invalid...");
			}
        },
        
		beforeSend:function() {
			$( "#login_err" ).html("Verify...");
		},
		
		error: function (xhr, ajaxOptions, thrownError) {
			//alert(xhr.status);
			//alert(thrownError);
		}
    });
	
	$( "#login_err" ).html("");
	
}