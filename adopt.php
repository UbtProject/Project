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
		$id=$_GET['id']



	$userRepository = new UserRepository();
	$user  = $userRepository->getUserById($_SESSION['id']);

	?>


	<div class="container">
		<div class="row">
			<?php include('Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<?php 
				 ?>
			</div>
		</div>
	<?php
		include('Includes/footer.php');
		
	?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>