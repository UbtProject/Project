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
		include_once '../Repository/cartRepository.php';
		include('../Controller/editAdoptedAnimalController.php');

		$cartRepository = new cartRepository();
		$animal  = $cartRepository->getCartById($_GET['id']);

	?>


	<div class="container">
		<div class="row">
			<?php include('../Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<h1 style="text-align:center;">Update Adopted Animal</h1>
				<form action="" method="post" enctype="multipart/form-data">
					<table class="profile-table table-bordered">
						<tr>
							<td colspan="4" style="text-align: center;"><br>
								<img style=" width: 200px; height: 200px; border-radius: 50%;" src="../Resources/Animal Images/<?= $animal['image'] ?>"><br><br>
							</td>
							
						</tr>


						<tr>
							<td colspan="2">
								<label class="profile-label">Name:</label>
								<input  type="text" class="form-control readonly" name="name" value="<?= $animal['name'] ?>" placeholder="Name..." readonly>
								<label class="profile-label">Price:</label>
								<input type="text" class="form-control readonly" name="price" value="<?= $animal['price'] ?>" placeholder="price..." readonly>
								<label class="profile-label">Delivered:</label>
								<input type="text" class="form-control" name="delivered" value="<?= $animal['delivered'] ?>" placeholder="Delivered..." >
							</td>
							
							<td colspan="2">
								<p style="font-size:19px;"><b>Description:</b></p>
								<label style="padding-left: 5px;">Description :</label>
								<textarea style="max-width: 400px; height: 200px; resize: none;" type="text"  class="form-control mt-2 readonly" name="description" placeholder="Description..." readonly><?= $animal['description'] ?></textarea>
							</td>
						</tr>						<tr>
							<td colspan="4" style="text-align:center;">
								<button class="profile-btn" type="submit" name="editBtn">Change</button>
							</td>
						</tr>
					</table>
				</form>	
			</div>
		</div>
	<?php
		include('../Includes/footer.php');
		
	?>
	</div>

	<script src="../Includes/Js/main.js"></script>
</body>
</html>