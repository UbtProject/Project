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
		include_once '../Repository/animalRepository.php';
		include('../Controller/editAnimalController.php');



	$animalRepository = new animalRepository();
	$animal  = $animalRepository->getAnimalById($_GET['id']);

	?>


	<div class="container">
		<div class="row">
			<?php include('../Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<form class="" action="" method="post" enctype="multipart/form-data">
					<table class="profile-table table-bordered">
						<tr>
							<td colspan="4" style="text-align: center;"><br>
								<img style=" width: 200px; height: 200px; border-radius: 50%;" src="../Resources/Animal Images/<?= $animal['image']?>"><br><br>
								<label for="file-upload" class="image-upload-label">
			    				<i>Upload Image</i> 
								</label>
								<input  accept="image/png, image/jpg, image/jpeg" id="file-upload" class="image-upload" type="file" name="myfile"><br><br><br>
							</td>
							
						</tr>


						<tr>
							<td colspan="2">
								<label class="profile-label">Name:</label>
								<input  type="text" class="form-control" name="name" value="<?= $animal['name'] ?>" placeholder="Name...">
								<label class="profile-label">Price:</label>
								<input type="text" class="form-control" name="price" value="<?= $animal['price'] ?>" placeholder="price...">
							</td>
							
							<td colspan="2">
								<p style="font-size:19px;"><b>Description:</b></p>
								<label style="padding-left: 5px;">Description:</label>
								<textarea style="max-width: 400px; height: 200px; resize: none;" type="text"  class="form-control mt-2" name="description" placeholder="Description..." ><?= $animal['description'] ?></textarea>
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