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


	<!-- Slideshow -->


	<div class="Slideshow">
		<img id="slideshow" style="width:100%; height: 500px;">
		<div class="slide-top-left">
			<h1>About our animal shelter</h1>
			<p style="font-size: 18px;"><b>Paws is the biggest Animal Shelter in the region, based in Prishtina, Kosovo.
			 We shelter around 500 animals each year.<br><br>
			 Our purpose is to rescue hurt and abandoned animals and find them a suitable forever home.<br><br>
			 Visitors are always welcome to meet, give love and adopt animals as well as volunteer for our shelter.<br>
			 We have a hardworking staff offering excellent care to the animals and guiding new volunteers into our programs.</b></p>
		</div>
		<div class="slide-top-right">
			<h1>Which animal is more suitable for you?</h1><br>
			<a href="quiz.php">
				<button class="slide-quiz-btn">TAKE THE QUIZ</button>
			</a>
		</div>
	</div>




	<!-- Main Page -->

	<div class="container"><br><br>
		<h1 class="container-title">These are our oldest rescued animals</h1><br><br>
			<!-- Old Animals -->

		<div class="animal-img">
			<a class="img-direction">&#10094</a>
			<div class="card-container">
				<img class="card-img" src="img/old-dog1.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Harold</h1><hr>
					<p><b>Harold</b> has been in our shelter for 8 years now.</p>
					<p>He was found as a puppy wondering the streets and scared of everyone around.</p>
					<p>He is very quiet and likes taking naps with his head on your nap</p>
				</div>
			</div>

			<div class="card-container">
				<img class="card-img" src="img/old-dog2.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Tracy</h1><hr>
					<p><b>Tracy</b> has been in our care for 7 years.</p>
					<p>She was given away by her owner in a terrible shape and was scared of being touched</p>
					<p>After a long process of healing she has finally opened her heart and is more energetic than ever</p>
					<p>She likes walking, playing or even just being patted</p>

				</div>
			</div>

			<div class="card-container">
				<img class="card-img" src="img/old-dog3.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Pluto</h1><hr>
					<p><b>Pluto</b> joined our shelter 9 years ago</p>
					<p>He was found loitering around a village where hee was chased continously</p>
					<p>As a long time has passed he has learnt what love feels like and likes hugging his owner</p>
					<p>He likes taking walks around town and playing around with the owner</p>
				</div>
			</div>

			<div class="card-container">
				<img class="card-img" src="img/old-dog4.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Almin</h1><hr>
					<p><b>Almin</b> was found 2 years ago and is currently 11 years old</p>
					<p>He was given away by his owner who could not take care of him as they had to move countries</p>
					<p>As he received a lot of love as a puppy, he is used to being around people and is very energetic</p>
					<p>Very energetic and jumps over anyone he meets</p>
				</div>
			</div>
			<a class="img-direction">&#10095</a>
		</div>

		<!-- New Animals -->

		<br><br><br><br>
		<h1 class="container-title">These are our newest rescued animals</h1><br><br>
		<div class="animal-img">
			<a class="img-direction">&#10094</a>
			<div class="card-container">
				<img class="card-img" src="img/new_animal1.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Katy</h1><hr>
					<p><b>Katy</b> was born from one of our cats 2 months ago</p>
					<p>She has very special coloring that baffles all that sees it</p>
					<p>As she was born recently she has yet to adapt to humans but still enjoys being patted</p>
				</div>
			</div>

			<div class="card-container">
				<img class="card-img" src="img/new_animal2.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Mat</h1><hr>
					<p><b>Mat</b> was given to us 3 months ago when he was born</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>

				</div>
			</div>

			<div class="card-container">
				<img class="card-img" src="img/new_animal3.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Simba</h1><hr>
					<p><b>Simba</b> was found as a kitten lost in the city streets</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				</div>
			</div>

			<div class="card-container">
				<img class="card-img" src="img/new_animal4.jpg" width="300" height="300">
				<div class="card-text">
					<h1>Bell</h1><hr>
					<p><b>Bell</b> has been given out a month ago after being born from a cat</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				</div>
			</div>
			<a class="img-direction">&#10095</a>
		</div>
		<br><br><br><br>
		<!-- Volunteer Section -->

		<span>
			<div>
				<h1>Become a volunteer</h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
			<div>
				<h1>Become a volunteer</h1>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
			</div>
		</span>

	</div>






	<script src="Js/main.js"></script>
</body>
</html>