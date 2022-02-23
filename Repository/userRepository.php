<?php 
include_once 'Includes/config.php';

 

class userRepository{
	private $connection;

	function __construct(){
        $conn = new config;
        $this->connection = $conn->startConnection();
    }

	function insertUser($user){

        $conn = $this->connection;

        $sql = "SELECT Name FROM users WHERE email=?";
		
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['email']]);

		$count = $statement->rowCount();

		if($count>0){
			echo "<script>alert('Email already exists!') </script>";

		}
		else{

	    	$name = $user->getName();
	    	$lastname = $user->getLastname();
	    	$email = $user->getEmail();
	    	$password = $user->getPassword();
	    	$pNumber = $user->getNumber();
	    	$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

	        

	    	$sql = "INSERT INTO users (name, lastname, email, password, phone_number, created_at) VALUES (?,?,?,?,?,?)";

	    	$statement = $conn->prepare($sql);

	    	$statement->execute([$name,$lastname,$email,$password,$pNumber,$date]);

	    	echo "<script> alert('User has been inserted successfully!'); </script>";
	    }
	}




}




?> 