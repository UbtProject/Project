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
        include_once 'Repository/animalRepository.php';

	?>


	<!-- Slideshow -->

	<div class="container">
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

	<br><br>
		<h1 class="container-title">These are our oldest rescued animals</h1><br><br>
			<!-- Old Animals -->

		<div class="animal-img" style="margin-left: 20px;">
			<?php
			$animalRepository = new animalRepository();
	    	$animals = $animalRepository->getOlderAnimals();

	        foreach($animals as $animal){
	            echo "
	           <div class='card-container'>
				<img class='card-img' src='Includes/img/".$animal['image']."' width='300' height='300'>
				<div class='card-text'>
					<h1>".$animal['name']."</h1>"
					.$animal['description']."
				</div>
			</div>";

	                
            }?>
        </div>

		<!-- New Animals -->

		<br><br><br><br>
		<h1 class="container-title">These are our newest rescued animals</h1><br><br>
		<div class="animal-img" style="margin-left: 20px;">
			<?php
			$animalRepository = new animalRepository();
	    	$animals = $animalRepository->getNewerAnimals();

	        foreach($animals as $animal){
	            echo "
	           <div class='card-container'>
				<img class='card-img' src='Includes/img/".$animal['image']."' width='300' height='300'>
				<div class='card-text'>
					<h1>".$animal['name']."</h1>"
					.$animal['description']."
				</div>
			</div>";

	                
            }?>
        </div>
		<br><br><br><br>
		<!-- Volunteer Section -->
		<div class="volunteer-background">
			<div class="volunteer-container">
				<div class="volunteer-children child1">
					<h1>Become a volunteer</h1>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>
				<div class="volunteer-children child2">
					<form >
						<label class="input-label">Name: </label><br> <input class="input" id="volunteer-name" type="text" name="name" placeholder="Name..."><br><p class="validation" id="name-valid"></p><br>
						<label class="input-label">Lastname: </label><br> <input class="input" id="volunteer-lastname" type="text" name="lastname" placeholder="Lastname..."><br><p class="validation" id="lastname-valid"></p><br>
						<label class="input-label">Email: </label><br> <input class="input" id="volunteer-email" type="email" name="text" placeholder="Email..."><br><p class="validation" id="email-valid"></p><br>
						<label class="input-label">Phone Number: </label><br> <input class="input" id="volunteer-number" type="text" name="number" placeholder="Number..."><br><p class="validation" id="number-valid"></p><br>		
						<button type="submit" name="submit" class="slide-quiz-btn" onclick="volunteer()">Volunteer</button>
					</form>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br>
	</div>



	<?php
		include('Includes/footer.php');
	?>


	<script>
		var mySlideImages = ["slide1.jpg","slide2.jpg","slide3.jpg"];
		var i=0;



		slideShow();

		function slideShow(){
			document.getElementById("slideshow").src="Includes/img/"+mySlideImages[i];
			setTimeout(function () {
				if (i< mySlideImages.length - 1) {
					i++
				}
				else{
					i=0;
				}
				slideShow();
			},4000)
		}
	</script>
</body>
</html>