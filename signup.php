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

		<div class="login-form-container" style="margin:auto; width: 48%; border-radius: 30px; background-color: #b8c0cf; border:1px solid gray;">
			<div style="margin-left: 60px;margin-right: 60px;">
				<form action="" method="post">
					<h1>Please Sign Up</h1>
					<label class="input-label">Name: </label><br> 
					<input class="input-login" id="register-name" type="text" name="name" placeholder="Name..."><br>
					<p class="validation" id="register-name-valid"></p><br>

					<label class="input-label">Lastname: </label><br> 
					<input class="input-login" id="register-lastname" type="text" name="lastname" placeholder="Lastname..."><br>
					<p class="validation" id="register-lastname-valid"></p><br>

					<label class="input-label">Email: </label><br> 
					<input class="input-login" id="register-email" type="text" name="email" placeholder="Email..."><br>
					<p class="validation" id="register-email-valid"></p><br>

					<label class="input-label">Phone Number: </label><br> 
					<input class="input-login" id="register-number" type="text" name="number" placeholder="Number..."><br>
					<p class="validation" id="register-number-valid"></p><br>	
	
					<label class="input-label">Password: </label><br> 
					<input class="input-login" id="register-password" type="password" name="password" placeholder="Password..."><br>
					<p class="validation" id="register-password-valid"></p><br>

					<label class="input-label">Confirm Password: </label><br> 
					<input class="input-login" id="register-password2" type="password" name="confirm_password" placeholder="Confirm Password..."><br>
					<p class="validation" id="register-password2-valid"></p><br><br>


					<div style="width:100%; text-align: center;">
						<button type="submit" name="registerBtn" class="login-btn" id="registerBtn">Register</button>
					</div>
				</form>
			</div>
		</div>

		<div style="height:140px;">
			
		</div>
	<?php
		include('Includes/footer.php');
		include('Controller/registerController.php');
	?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>