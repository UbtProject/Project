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
		$animalRepository = new animalRepository();
	    $animals = $animalRepository->getAllAnimals();

	?>


	<div class="container">
		<div class="row">
			<?php include('Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<div style="height:140px;">
			
				</div>
				<div class="animal-img" style="margin-left: 20px;">
					<?php
					

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
			</div>
		</div>
		<?php
			include('Includes/footer.php');
		?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>