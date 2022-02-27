<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../Includes/Css/Style.css">

</head>
<body>
	<?php
		include('../Includes/header.php');
		
		include_once '../Repository/volunteerRepository.php';




	
	$volunteerRepository = new volunteerRepository();	
	$volunteer= $volunteerRepository->getVolunteerByID($_GET['id']);

	?>


	<div class="container">
		<div class="row">
			<?php include('../Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<div style="height:140px;"></div>

				<div class="login-form-container" style="margin:auto; width: 48%; border-radius: 30px; background-color: #b8c0cf; border:1px solid gray;">
					<div style="margin-left: 60px;margin-right: 60px;">
						<form action="" method="post">
							<h1>Accept Volunteer</h1>
							<label class="input-label">Name: </label><br> 
							<input class="input-login" id="register-name" type="text" name="name" placeholder="Name..." value="<?=  $volunteer['name'] ?>"><br>
							<p class="validation" id="register-name-valid"></p><br>

							<label class="input-label">Lastname: </label><br> 
							<input class="input-login" id="register-lastname" type="text" name="lastname" placeholder="Lastname..." value="<?= $volunteer['lastname'] ?>"><br>
							<p class="validation" id="register-lastname-valid"></p><br>

							<label class="input-label">Email: </label><br> 
							<input class="input-login" id="register-email" type="text" name="email" placeholder="Email..." value="<?= $volunteer['email'] ?>"><br>
							<p class="validation" id="register-email-valid"></p><br>

							<label class="input-label">Phone Number: </label><br> 
							<input class="input-login" id="register-number" type="text" name="number" placeholder="Number..." value="<?= $volunteer['phone_number'] ?>"><br>
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
				
			</div>
		</div>
	<?php
		include('../Controller/acceptVolunteerController.php');
		include('../Includes/footer.php');
		
	?>
	</div>

	<script>
		

var registerBtn = document.getElementById('registerBtn');
registerBtn.addEventListener("click", function (event) {
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexNumber=/\d{7,15}/;
	var regexPass=/[A-Z]\w{7,15}/;

	var name =document.getElementById('register-name');
	var validName =document.getElementById('register-name-valid');

	var lastname =document.getElementById('register-lastname');
	var validLastname =document.getElementById('register-lastname-valid');

	var email =document.getElementById('register-email');
	var validEmail =document.getElementById('register-email-valid');

	var number =document.getElementById('register-number');
	var validNumber =document.getElementById('register-number-valid');

	var password =document.getElementById('register-password');
	var validPassword =document.getElementById('register-password-valid');

	var cPassword =document.getElementById('register-password2');
	var validCPassword =document.getElementById('register-password2-valid');
	

	
	if(name.value==""||!regexName.test(name.value)){
 		validName.innerHTML=" Name Not Valid";
 		event.preventDefault();
	}
	else{
		validName.innerHTML="";
	}
	if(lastname.value==""||!regexName.test(lastname.value)){
 		validLastname.innerHTML=" Lastname Not Valid";
 		event.preventDefault();
	}
	else{
		validLastname.innerHTML="";
	}
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
 		event.preventDefault();
	}
	else{
		validEmail.innerHTML="";
	}
	if(number.value==""||!regexNumber.test(number.value)){
 		validNumber.innerHTML=" Number Not Valid";
 		event.preventDefault();
	}
	else{
		validNumber.innerHTML="";
	}
	if(password.value==""||!regexPass.test(password.value)){
 		validPassword.innerHTML=" Password must start with a capital letter and have 8 characters";
 		event.preventDefault();
	}
	else{
		validPassword.innerHTML="";
	}
	if(cPassword.value!=password.value){
 		validCPassword.innerHTML=" Passwords Must Match";
 		event.preventDefault();
	}
	else{
		validCPassword.innerHTML="";
	}
	
});
	</script>
</body>
</html>