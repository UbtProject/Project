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
	?>

	<div class="container">
		<div style="height:140px;">
			
		</div>


		<div class="contact-form-container">
			<div>
				<h3>Contact Us</h3>
					<h2>We appreciate every feedback</h2>
					
				<img src="../Includes/img/contact-form.png">
			</div>
			<div class="volunteer-children child2" style="margin-left: auto; margin-right: auto;">
				<form action="" method="post">
				
					<label class="input-label">Name: </label><br> 
					<input class="input" id="contact-name" type="text" name="name" placeholder="Name..."><br>
					<p class="validation" id="contact-name-valid"></p><br>

					<label class="input-label">Email: </label><br> 
					<input class="input" id="contact-email" type="text" name="email" placeholder="Email..."><br>
					<p class="validation" id="contact-email-valid"></p><br>

					<label class="input-label">Phone Number: </label><br> 
					<input class="input" id="contact-number" type="text" name="number" placeholder="Number..."><br>
					<p class="validation" id="contact-number-valid"></p><br>	
	

					<label class="input-label">Feedback: </label><br> 
					<textarea style="height:100px;" class="input" name="feedback" id="textarea" placeholder="Write your feedback here..."></textarea><br><br>
					<p class="validation" id="contact-feedback-valid"></p><br>

					<button id="contactBtn" type="submit" name="addFeedback" class="slide-quiz-btn">Contact</button>
				</form>
			</div>
			
		</div>

		<div style="height:100px;">
			
		</div>


	<?php

		include('../Controller/addFeedbackController.php');
		include('../Includes/footer.php');
	?>
	</div>
	<script type="text/javascript">
		var contactBtn = document.getElementById("contactBtn");
contactBtn.addEventListener("click", function (event) {
	var regexName=/^[a-zA-Z]{2,20}( )?[a-zA-Z]{2,20}(( )[a-zA-Z]{2,20})?$/;
	var regexEmail=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
	var regexNumber=/\d{7,15}/;
	var regexFeedback=/^[a-zA-Z0-9_\-\.]+/;

	var name =document.getElementById('contact-name');
	var validName =document.getElementById('contact-name-valid');
	var email =document.getElementById('contact-email');
	var validEmail =document.getElementById('contact-email-valid');
	var number =document.getElementById('contact-number');
	var validNumber =document.getElementById('contact-number-valid');
	var textarea =document.getElementById('textarea');
	var validTextarea =document.getElementById('contact-feedback-valid');
	
	if(name.value==""||!regexName.test(name.value)){
 		validName.innerHTML=" Name Not Valid";
 		event.preventDefault();
	}
	else{
		validName.innerHTML="";
	}
	
	if(email.value==""||!regexEmail.test(email.value)){
 		validEmail.innerHTML=" Email Not Valid";
 		event.preventDefault();
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
	if(!regexFeedback.test(textarea.value)){
 		validTextarea.innerHTML=" Feedback can't be empty";
 		event.preventDefault();
	}
	
	else{
		validNumber.innerHTML="";
	}
});
	</script>
</body>
</html>