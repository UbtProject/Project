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
        include_once 'Repository/cartRepository.php';
		$cartRepository = new cartRepository();
	    $animals = $cartRepository->getAllCartAnimals();
	?>
	<div class="container">
		<div class="row">
			<?php include('Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<div style="height:140px; text-align: center;">
				<br><h1>Animals you have adopted</h1>
				</div>

				<div class="animal-img" style="margin-left: 20px;">
					<?php
	            	foreach($animals as $animal){
	            		echo "
	            		<a class='card-container' href='adopt.php?id=".$animal['ID']."'>
							<img class='card-img' src='Includes/img/".$animal['image']."' width='300' height='300'>
							<div class='card-text'>
								<h1>".$animal['name']."</h1>"
								.$animal['description']."
								<p>Price: ".$animal['price']."$</p>
								<p>Status: ".$animal['delivered']."</p>
							</div>
						</a>";
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