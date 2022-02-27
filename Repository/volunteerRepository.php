<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class volunteerRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }


    function insertVolunteer($volunteer){

        $conn = $this->connection;
        $sql = "SELECT name FROM users WHERE email=?";
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['email']]);
		$count = $statement->rowCount();
		$sql = "SELECT name FROM volunteer WHERE email=?";
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['email']]);
		$count = $count + $statement->rowCount();
		if($count>0){
			echo "<script>alert('Email already exists!') </script>";

		}
		else{
	    	$name = $volunteer->getName();
	    	$lastname = $volunteer->getLastname();
	    	$email = $volunteer->getEmail();
	    	$pNumber = $volunteer->getNumber();
	        
	    	$sql = "INSERT INTO volunteer (name, lastname, email, phone_number) VALUES (?,?,?,?)";
	    	$statement = $conn->prepare($sql);
	    	$statement->execute([$name,$lastname,$email,$pNumber]);

	    	$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");
	    	$sql = "SELECT ID FROM volunteer WHERE email='$email'";
			$statement = $conn->query($sql);
       		$user = $statement->fetch(PDO::FETCH_ASSOC);
       		$id=$user['ID'];
	    	$sql = "INSERT INTO logs (userID, action, log_date) VALUES (?,?,?)";
       		$action= "User: ". $name . " ". $lastname . " with the ID: ". $id. " has volunteered to be an admin";
       		$statement = $conn->prepare($sql);
	   		$statement->execute([$id,$action,$date]);

	    }
	}

	function getAllVolunteers(){
        $conn = $this->connection;
        $sql = "SELECT * FROM volunteer";
        $statement = $conn->query($sql);
        $volunteers = $statement->fetchAll();
        return $volunteers;
    }
    function getVolunteerByID($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM volunteer WHERE id='$id'";
        $statement = $conn->query($sql);
        $volunteer = $statement->fetch();
        return $volunteer;
    }

    function deleteVolunteer($id){
        $conn = $this->connection;

        $sql = "DELETE FROM volunteer WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

   } 
}




?> 