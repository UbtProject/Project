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
		include_once 'Repository/animalRepository.php';
		include_once 'Repository/cartRepository.php';




	$userRepository = new UserRepository();
	$animalRepository = new animalRepository();
	$cartRepository = new cartRepository();
	$numberOfUsers  = $userRepository->getNumberOfUsers();
	$adoptions  = $cartRepository->getNumberOfAdoptions();
	$winnings  = $cartRepository->getTotalOfWinnings();
	$numberOfAnimals  = $animalRepository->getNumberOfAnimals();
	$users = $userRepository->getAllUsers();
	$animals = $animalRepository->getAllAnimals();
	$items = $cartRepository->getAllItems();

	?>


	<div class="container">
		<div class="row">
			<?php include('Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				
				<div class="dashboard-card-container">
					<div class="card-container red-card dashboard-card-text">
						<p style="font-size: 24px;"><?= $numberOfAnimals['total'] ?> Animals</p>
						Total Animals Sheltered
					</div>
					<div class="card-container blue-card dashboard-card-text">
						<p style="font-size: 24px;"><?= $adoptions['total'] ?> Adoptions</p>
						Total Animals Adopted
					</div>
					<div class="card-container yellow-card dashboard-card-text">
						<p style="font-size: 24px;"><?= $winnings['total'] ?>$</p>
						Total Winnings
					</div>
					<div class="card-container green-card dashboard-card-text">
						<p style="font-size: 24px;"><?= $numberOfUsers['total'] ?> Users</p>
						Total Users
					</div>
				</div>
				<br><h1 style="text-align:center;">Users</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Profile</th>
						<th>Name</th>
						<th>Lastname</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Role</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php 
					foreach($users as $user){?>
						<tr>
							<td class="align-text-center">
								<img style=" width: 35px; height:35px; border-radius: 50%;" src="Resources/Profile Images/<?= $user['profile_image']?>">
							</td>
							<td><?= $user['name']?></td>
							<td><?= $user['lastname']?></td>
							<td><?= $user['email']?></td>
							<td><?= $user['phone_number']?></td>
							<td><?= $user['role']?></td>
							<td class="align-text-center"><button class="editBtn">Edit</button></td>
							<td class="align-text-center"><button class="deleteBtn">Delete</button></td>
						</tr>
					<?php
					}
					?>
				</table>
				<br><h1 style="text-align:center;">Animals</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Profile</th>
						<th>Name</th>
						<th>Price</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php 
					foreach($animals as $animal){?>
						<tr>
							<td class="align-text-center">
								<img style=" width: 35px; height:35px; border-radius: 50%;" src="Resources/Animal Images/<?= $animal['image']?>">
							</td>
							<td><?= $animal['name']?></td>
							<td><?= $animal['price']?></td>
							<td class="align-text-center"><button class="editBtn">Edit</button></td>
							<td class="align-text-center"><button class="deleteBtn">Delete</button></td>
						</tr>
					<?php
					}
					?>
				</table>

				<br><h1 style="text-align:center;">Adoptions</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Profile</th>
						<th>Name</th>
						<th>Price</th>
						<th>Adopted by:</th>						
						<th>Delivered:</th>						
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php 
					foreach($items as $item){
						$user = $userRepository->getUserById($item['userID']);
						?>
						<tr>
							<td class="align-text-center">
								<img style=" width: 35px; height:35px; border-radius: 50%;" src="Resources/Animal Images/<?= $item['image']?>">
							</td>
							<td><?= $item['name']?></td>
							<td><?= $item['price']?></td>
							<td><?= $user['name']?></td>
							<td><?= $item['delivered']?></td>
							<td class="align-text-center"><button class="editBtn">Edit</button></td>
							<td class="align-text-center"><button class="deleteBtn">Delete</button></td>
						</tr>
					<?php
					}
					?>
				</table>
				<br>
			</div>
		</div>
	<?php
		include('Includes/footer.php');
		
	?>
	</div>

	<script src="Includes/Js/main.js"></script>
</body>
</html>