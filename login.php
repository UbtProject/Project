<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Includes/Css/Style.css">

</head>
<body>
	<?php
		include('Includes/header.php');
	?>

	<div class="container">
		<div style="height:140px;">
			
		</div>
		<form action="" method="post">
			<div class="login-form-container" style="margin:auto; width: 48%; border-radius: 30px; background-color: #b8c0cf; border:1px solid gray;">
				<div style="margin-left: 60px;margin-right: 60px;">
					<h1>Please Login</h1>
				

					<label class="input-label">Email: </label><br> 
					<input class="input-login" id="login-email" type="text" name="email" placeholder="Email..."><br>
					<p class="validation" id="login-email-valid"></p><br>

					<label class="input-label">Password: </label><br> 
					<input class="input-login" id="login-password" type="password" name="password" placeholder="Password..."><br>
					<p class="validation" id="login-password-valid"></p><br><br>	
	
				
					<div style="width:100%; text-align: center;">
						<button type="submit" name="loginBtn" class="login-btn" id="loginBtn">Log in</button>
					</div>
				</div>
			</div>
		</form>
		<div style="height:140px;">
			
		</div>
	<?php
		include('Includes/footer.php');
		include('Controller/loginController.php');
	?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>