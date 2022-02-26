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
		$id=$_GET['id'];
		$animalRepository = new animalRepository();
		$animal  = $animalRepository->getAnimalById($id);

	?>


	<div class="container">
		<div class="row">
			<?php include('Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<form action="" method="post" style="display:flex; padding:30px;">
					<img src="Resources/Animal Images/<?=$animal['image']?>" width='40%' height='40%'>
					<div style="padding:40px; font-size:20px;">
						<h1><?=$animal['name'];?></h1><br>
						<?=$animal['description'];?><br>
						<h3>Adoption Price: <?= $animal['price']; ?>$</h3>
						<button type="submit" name="addToCartBtn" class="cart-btn">Add to cart</button>
					</div>
					
				</form>
			</div>
		</div>
	<?php
	    include_once 'Controller/addToCartController.php';
		include('Includes/footer.php');
		
	?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>