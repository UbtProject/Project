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
		include('../Controller/addAnimalController.php');



	?>


	<div class="container">
		<div class="row">
			<?php include('../Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<h1 style="text-align:center;">Add an animal to the database:</h1>
				<form action="" method="post" enctype="multipart/form-data">
					
					<table class="profile-table table-bordered">
						
						<tr>
							<td colspan="2">
								<label for="file-upload" class="image-upload-label">
			    				<i>Upload Image</i> 
								</label>
								<input  accept="image/png, image/jpg, image/jpeg" id="file-upload" class="image-upload" type="file" name="myfile"><br><br><br>
								<label class="profile-label">Name:</label>
								<input  type="text" class="form-control" name="name" placeholder="Name...">
								<label class="profile-label">Price:</label>
								<input type="text" class="form-control" name="price" placeholder="price...">
							</td>
							
							<td colspan="2">
								<p style="font-size:19px;"><b>Description:</b></p>
								<label style="padding-left: 5px;">Text 1:</label>
								<input type="text"  class="form-control mt-2" name="text1" placeholder="Text 1..." ><br>
								<label style="padding-left: 5px; padding-top: 7px;">Text 2:</label>
								<input type="text"  class="form-control mt-2" name="text2" placeholder="Text 2..." ><br>
								<label style="padding-left: 5px;">Text 3:</label>
								<input type="text"  class="form-control mt-2" name="text3" placeholder="Text 3..." >
							</td>
						</tr>
						<tr>
							<td colspan="4" style="text-align:center;">
								<button class="profile-btn" type="submit" name="addAnimalButton">Add Animal</button>
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