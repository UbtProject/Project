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
		<div class="mission-container">

			<div class="mission-header">
				<h3 class="mission-h3">Our Mission</h3>
				<h1>Save animals and find them a new home</h1>
			</div>

			<div class="about-paragraph-container">
				<p class="about-paragraph">
					Our purpose is to help any animals, be they stray that wonder around the streets, 
					abused animals that have been taken away from their owners, or animals given to us
					that the current owner couldn't take care of. We help the animals by finding them a
					suitable home in which they can be free and grow
				</p>
			</div>
		</div>

		<br><br><br>

		<div>
			<div class="about-main" >
				<img class="about-main-img" src="../Includes/img/animal-shelter.jpg" >
				<div style="width:100%; padding:4%; padding-bottom:7%;">
					<h3 class="mission-h3" style="font-size:15px;">Our People</h3>
					<h2>Creating a community for all</h2>
					<p class="about-paragraph">
					Paws has grown from 2 people that couldn't bear to see pets being mistreated, and has
					grown throughout the years to a shelter with over 2,000 volunteers helping us make a better
					community for us and for our animals. With over 7,000 animals being taken care of and a general
					18,000 animals saved, we continue saving animals and finding suitable homes. Our staff all comes
					from volunteers who are willing to help us in our mission to save animals throughout Kosovo
					</p>
				</div> 
			
					
			

			</div>
		</div>

		<br><br><hr><br><br>

		<div class="mission-container">

			<div class="mission-header">
				<h1>Volunteer or donate</h1>
			</div>

			<div class="about-paragraph-container">
				<p class="about-paragraph">
					As our shelter continously takes animals and saves them, we use most of the money we gain
					to buy food and expand our space for more animals to join us, therefore any help, be it money, toys
					or just volunteer work, helps us a lot.
				</p>
			</div>
		</div>

		<br><br><br>

		<div class="volunteer-background">
			<div class="volunteer-container">
				<img class="about-main-img" src="../Includes/img/animal-shelter2.jpg" >
				<div class="volunteer-children child2">
					<form action="" method="post">
						<label class="input-label">Name: </label><br> 
						<input class="input" id="about-name" type="text" name="name" placeholder="Name..."><br>
						<p class="validation" id="about-name-valid"></p><br>

						<label class="input-label">Lastname: </label><br> 
						<input class="input" id="about-lastname" type="text" name="lastname" placeholder="Lastname..."><br>
						<p class="validation" id="about-lastname-valid"></p><br>

						<label class="input-label">Email: </label><br> 
						<input class="input" id="about-email" type="text" name="email" placeholder="Email..."><br>
						<p class="validation" id="about-email-valid"></p><br>

						<label class="input-label">Phone Number: </label><br> 
						<input class="input" id="about-number" type="text" name="number" placeholder="Number..."><br>
						<p class="validation" id="about-number-valid"></p><br>	

						<button id="volunteerButton" type="submit" name="volunteerSubmit" class="slide-quiz-btn">Volunteer</button>
					</form>
				</div>
			</div>
		</div>
		<div style="height: 130px;">
		
		</div>
		
	
	
	<?php
		include('../Controller/registerVolunteerController.php');
		include('../Includes/footer.php');
	?>
	</div>

	<script src="../Includes/Js/main.js"></script>
</body>
</html>