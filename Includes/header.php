<header>
	<div class="topnav">
 		<a class="active" href="index.php"><img class="logo" src="../Includes/img/Logo.png" width="17" height="17"> &nbsp;Paws</a>
 		<div class="nav-right">
 			<a href="about.php">About</a>
 			<a href="contact.php">Contact</a>
 			<?php
 			    session_start();
 				if(isset($_SESSION['role'])){
 					echo "
 						<a href='Profile.php'>".$_SESSION['name']."</a>
 						<a href='logout.php'>Log out</a>
  						";
 				}
 				else{
 					echo "
 						<a href='logIn.php'>Log In</a>
  						<a href='signUp.php'>Sign Up</a>
  						";
 				}
 			?>
  		</div>
	</div>
</header>