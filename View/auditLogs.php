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
		include_once '../Repository/logsRepository.php';




	$userRepository = new UserRepository();	
	$logsRepository = new logsRepository();	


	
	$id=$_GET['id'];

	$user = $userRepository->getUserById($id);
	$logs= $logsRepository->getLogsById($id);

	?>


	<div class="container">
		<div class="row">
			<?php include('../Includes/sidebar.php'); ?>
			<div style="width: 84%;">
				<br><h1 style="text-align:center;"><?php echo $user['name'] . " " . $user['lastname']. "'s logs" ?></h1><br>
				<table class="align-center table-bordered dashboard-table">
					<tr>
						<th>User</th>
						<th>Action</th>
						<th>Log Date</th>
					</tr>
					<?php 
					foreach($logs as $log){
						?>
						<tr>
							
							<td><?= $user['name']." ".$user['lastname']?></td>
							<td><?= $log['action']?></td>
							<td><?= $log['log_date']?></td>
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