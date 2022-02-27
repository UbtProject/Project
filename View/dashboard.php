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
		include_once '../Repository/userRepository.php';
		include_once '../Repository/animalRepository.php';
		include_once '../Repository/cartRepository.php';
		include_once '../Repository/volunteerRepository.php';
		include_once '../Repository/logsRepository.php';
		include_once '../Repository/contactRepository.php';
		include_once '../Controller/deleteUser.php';
		include_once '../Controller/deleteAnimal.php';




	$userRepository = new UserRepository();
	$animalRepository = new animalRepository();
	$cartRepository = new cartRepository();
	$volunteerRepository = new volunteerRepository();	
	$logsRepository = new logsRepository();	
	$contactRepository = new contactRepository();	


	$numberOfUsers  = $userRepository->getNumberOfUsers();
	$adoptions  = $cartRepository->getNumberOfAdoptions();
	$winnings  = $cartRepository->getTotalOfWinnings();
	$numberOfAnimals  = $animalRepository->getNumberOfAnimals();


	$users = $userRepository->getAllUsers();
	$animals = $animalRepository->getAllAnimals();
	$items = $cartRepository->getAllItems();
	$volunteers= $volunteerRepository->getAllVolunteers();
	$logs= $logsRepository->getAllLogs();
	$feedbacks= $contactRepository->getAllFeedbacks();

	?>


	<div class="container">
		<div class="row">
			<?php include('../Includes/sidebar.php'); ?>
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
								<img style=" width: 35px; height:35px; border-radius: 50%;" src="../Resources/Profile Images/<?= $user['profile_image']?>">
							</td>
							<td><?= $user['name']?></td>
							<td><?= $user['lastname']?></td>
							<td><?= $user['email']?></td>
							<td><?= $user['phone_number']?></td>
							<td><?= $user['role']?></td>
							<td class="align-text-center"><a href='editUser.php?id=<?=$user["ID"]?>'><button class="editBtn">Edit</button></a></td>
							<td class="align-text-center"><a href='dashboard.php?deleteID=<?=$user["ID"]?>'><button class="deleteBtn">Delete</button></a></td>
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
								<img style=" width: 35px; height:35px; border-radius: 50%;" src="../Resources/Animal Images/<?= $animal['image']?>">
							</td>
							<td><?= $animal['name']?></td>
							<td><?= $animal['price']?>$</td>
							<td class="align-text-center"><a href='editAnimal.php?id=<?=$animal["ID"]?>'><button class="editBtn">Edit</button></a></td>
							<td class="align-text-center"><a href='dashboard.php?ID=<?=$animal["ID"]?>'><button class="deleteBtn">Delete</button></a></td>
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
					</tr>
					<?php 
					foreach($items as $item){
						$user = $userRepository->getUserById($item['userID']);
						?>
						<tr>
							<td class="align-text-center">
								<img style=" width: 35px; height:35px; border-radius: 50%;" src="../Resources/Animal Images/<?= $item['image']?>">
							</td>
							<td><?= $item['name']?></td>
							<td><?= $item['price']?>$</td>
							<td><?= $user['name']." ".$user['lastname']?></td>
							<td><?= $item['delivered']?></td>
							<td class="align-text-center"><a href='editAdoptedAnimal.php?id=<?=$item["ID"]?>'><button class="editBtn">Edit</button></a></td>
						</tr>
					<?php
					}
					?>
				</table>
				<br><h1 style="text-align:center;">Volunteers</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Name</th>
						<th>Lastname</th>
						<th>Email:</th>						
						<th>Phone Number:</th>						
						<th>Accept</th>
					</tr>
					<?php 
					foreach($volunteers as $volunteer){
						?>
						<tr>
							<td><?= $volunteer['name']?></td>
							<td><?= $volunteer['lastname']?></td>
							<td><?= $volunteer['email']." ".$user['lastname']?></td>
							<td><?= $volunteer['phone_number']?></td>
							<td class="align-text-center"><a href='acceptVolunteer.php?id=<?=$volunteer["ID"]?>'><button class="editBtn">Accept</button></a></td>
						</tr>
					<?php
					}
					?>
				</table>

				<br><h1 style="text-align:center;">Feedbacks</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Feedback</th>
					</tr>
					<?php 
					foreach($feedbacks as $feedback){
						?>
						<tr>
							
							<td><?= $feedback['name']?></td>
							<td><?= $feedback['email']?></td>
							<td><?= $feedback['phone_number']?></td>
							<td><?= $feedback['feedback']?></td>
						</tr>
					<?php
					}
					?>
				</table>

				<br><h1 style="text-align:center;">Logs</h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>User</th>
						<th>Action</th>
						<th>Log Date</th>
						<th>Users Logs</th>
					</tr>
					<?php 
					foreach($logs as $log){
						$user = $userRepository->getUserById($log['userID']);
						?>
						<tr>
							
							<td><?= $user['name']." ".$user['lastname']?></td>
							<td><?= $log['action']?></td>
							<td><?= $log['log_date']?></td>
							<td class="align-text-center"><a href='auditLogs.php?id=<?=$user["ID"]?>'><button class="editBtn">Users Logs</button></a></td>
						</tr>
					<?php
					}
					?>
				</table><br><br>

				
				
			</div>
		</div>
	<?php
		include('../Includes/footer.php');
		
	?>
	</div>

	<script src="../Includes/Js/main.js"></script>
</body>
</html>