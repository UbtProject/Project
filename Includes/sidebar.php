<div style="min-height: 100vh; margin-top: -16px; width: 15%; background-color: #d9d9d9; margin-top: 0px;">
	<div style="position: sticky; top: 0px;">
		<?php 
		if ($_SESSION['role']=="admin") {?>
		<a href="dashboard.php"><button class="btn-sidebar"><b>Dashboard</b></button></a><hr class="no-margin">
		<a href="addAnimal.php"><button class="btn-sidebar"><b>Add Animal</b></button></a><hr class="no-margin">
		<?php } ?>
		<a href="profile.php"><button class="btn-sidebar"><b>Profile</b></button></a><hr class="no-margin">
		<a href="animals.php"><button class="btn-sidebar"><b>Animals</b></button></a><hr class="no-margin">
		<a href="cart.php"><button class="btn-sidebar"><b>My Cart</b></button></a><hr class="no-margin">
		
	</div>
</div>