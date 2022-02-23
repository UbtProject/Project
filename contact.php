<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Css/Style.css">

</head>
<body>
	<?php
		include('Includes/header.php');
	?>

	<div class="container">
		<div style="height:140px;">
			
		</div>


		<div class="contact-form-container">
			<div>
				<h3>Contact Us</h3>
					<h2>We appreciate every feedback</h2>
					
				<img src="img/contact-form.png">
			</div>
			<div class="volunteer-children child2">
				
					<label class="input-label">Name: </label><br> 
					<input class="input" id="contact-name" type="text" name="name" placeholder="Name..."><br>
					<p class="validation" id="contact-name-valid"></p><br>

					<label class="input-label">Lastname: </label><br> 
					<input class="input" id="contact-lastname" type="text" name="lastname" placeholder="Lastname..."><br>
					<p class="validation" id="contact-lastname-valid"></p><br>

					<label class="input-label">Email: </label><br> 
					<input class="input" id="contact-email" type="email" name="text" placeholder="Email..."><br>
					<p class="validation" id="contact-email-valid"></p><br>

					<label class="input-label">Phone Number: </label><br> 
					<input class="input" id="contact-number" type="text" name="number" placeholder="Number..."><br>
					<p class="validation" id="contact-number-valid"></p><br>	
						
					<button type="submit" name="submit" class="slide-quiz-btn" onclick="">Contact</button>
					
			</div>
			
		</div>




	<?php
		include('Includes/footer.php');
	?>
	</div>

	<script src="Js/main.js"></script>
</body>
</html>