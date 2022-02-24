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
		include_once 'Repository/userRepository.php';
		include('Controller/editController.php');



	$userRepository = new UserRepository();
	$user  = $userRepository->getUserById($_SESSION['id']);

	?>


	<div class="container">
		<div class="row">
			<?php include('Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<form class="" action="" method="post" enctype="multipart/form-data">
					<table class="profile-table table-bordered">
						<tr>
							<td colspan="4" style="text-align: center;"><br>
								<img style=" width: 200px; height: 200px; border-radius: 50%;" src="Resources/Profile Images/<?= $user['profile_image']?>"><br><br>
								<label for="file-upload" class="image-upload-label">
			    				<i></i> Upload Image
								</label>
								<input id="file-upload" class="image-upload" type="file" name="myfile"><br><br><br>
							</td>
							
						</tr>


						<tr>
							<td colspan="2">
								<label class="profile-label">Name:</label>
								<input type="text" class="form-control" value="<?= $user['name'] ?>" name="name" placeholder="Name...">
								<label class="profile-label">Lastname:</label>
								<input type="text" class="form-control" value="<?= $user['lastname'] ?>" name="lastname" placeholder="Lastname...">
								<label class="profile-label">Email:</label>
								<input type="text"  class="form-control" value="<?= $user['email'] ?>" name="email" placeholder="Email...">
								<label style="padding-left: 5px;">Phone Number:</label>
								<input type="text"  class="form-control mt-2" value="<?= $user['phone_number'] ?>" name="phone_number" placeholder="Number...">
							</td>
							
							<td colspan="2">
								<label style="padding-left: 5px;">Account created in:</label>
								<input type="text"  class="form-control mt-2 readonly" value="<?= $user['created_at'] ?>" name="createdat" placeholder="Created At..." readonly><br>
								<label style="padding-left: 5px; padding-top: 7px;">Last update:</label>
								<input type="text"  class="form-control mt-2 readonly" value="<?= $user['updated_at'] ?>" name="updatedat" placeholder="Updated At..." readonly><br>
								<label style="padding-left: 5px;">Last access to site:</label>
								<input type="text"  class="form-control mt-2 readonly" value="<?= $user['last_access'] ?>" name="lastaccess" placeholder="Last Access..." readonly>
							</td>
						</tr>
						<tr>
							<td colspan="4" style="text-align:center;">
								<button class="profile-btn" type="submit" name="editBtn">Change</button>
							</td>
						</tr>
					</table>
				</form>	
			</div>
		</div>
	<?php
		include('Includes/footer.php');
		
	?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>