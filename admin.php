<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/ednas-logo.ico" type="image/x-icon"/>
  <title>Ednas School</title>
  <!-- Color CSS -->
  <link href="css/color-2.css" rel="stylesheet">
  <!-- Typography StyleSheet CSS -->
  <link href="css/typography-02.css" rel="stylesheet">
  <!-- Responsive CSS -->
  <link href="css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
	<style>
  .container{
	margin:auto;
	max-width:400px;
	
	-webkit-border-radius:10px; 
	-moz-border-radius:10px; 
	box-shadow:0px 0px 7px grey; 
	background:#E1E1E1; 
	margin-top:20px;
}
  </style>
  </head>

  <body>
	
	<div class="container">
		<form role="form" class="form-horizontal">
			
			<fieldset>
							
				<div class="col-sm-6">
					
				</div>
				
				<div class="col-sm-12">
					<br>
					<div class="form-group">
							
						<label class="col-sm-3 control-label">USERNAME: </label>
						<div class="col-sm-8">
							<input type="text" id="login_username" class="form-control" required>
						</div>
						
						
					</div>
				</div>
				
				<div class="col-sm-12">
					
					<div class="form-group">
							
						<label class="col-sm-3 control-label">PASSWORD: </label>
						<div class="col-sm-8">
							<input type="password" id="login_password" class="form-control" required>
						</div>
						
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-8">
							<div id="err" style="color:red;"></div>
							<br>
							
							<div class="col-sm-7"></div>
							<button id="btn_login" type="button" class="btn btn-primary col-sm-4" >LOGIN</button>
							
					</div>
				</div>
				
				<div class="modal fade" id="myModalEmployee" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			</div>

				
			</fieldset>
		
		
		</form>
		
	</div>
		
	
	
	
	
  <!--Jquery Library-->
  <script src="js/jquery.js"></script>
  <!--Bootstrap core JavaScript-->
  <script src="js/bootstrap.min.js"></script>
  <!--Custom JavaScript-->
  <script src="js/custom.js"></script>
  
  <script src="js/admin.js"></script>
  </body>
  
</html>