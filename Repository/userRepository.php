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

	function logIn(){

        $conn = $this->connection;
        $email=$_POST['email'];
        $password=$_POST['password'];
       	$sql = "SELECT id,name, role, password FROM users WHERE email='$email'";
		$statement = $conn->query($sql);
       	$user = $statement->fetch(PDO::FETCH_ASSOC);
		$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

		if($statement->rowCount() < 1){
       		echo "<script> alert('Email entered incorrectly!'); </script>";
		}
		else{
       		if (!password_verify($password,$user['password'])) {
       			echo "<script> alert('Password entered incorrectly!'); </script>";
       		}
       		else{
       			session_start();
       			$_SESSION['name'] = $user['name'];
       			$_SESSION['role'] = $user['role'];
       			$_SESSION['id'] = $user['id'];
       			header("location:profile.php");
       			$sql = "UPDATE users SET last_access='$date' WHERE email='$email'";
       			$statement = $conn->query($sql);

        	}
    	}

	}

	function editUser(){

        $conn = $this->connection;
      	$newfilename = $_FILES['myfile']['name'];
	    $id=$_SESSION['id'];
	    $sql="SELECT email,profile_image FROM users WHERE id='$id'";
	    $statement = $conn->query($sql);
	    $files=$statement->fetch(PDO::FETCH_ASSOC);
	    $filename=$files['profile_image'];
	    $destination = 'Resources/Profile Images/'. $filename;
	    if(!empty($newfilename)){
	    	if($filename!="default.jpg"){
	    		unlink($destination);
	    	}
	        $destination = 'Resources/Profile Images/'.$id . $newfilename;
	        $file = $_FILES['myfile']['tmp_name'];
	        $filename= $id . $newfilename;
	        move_uploaded_file($file, $destination);
	    }

	    
	    $sql = "SELECT * FROM users WHERE email=? AND id<>'$id'";
			
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['email']]);
		$count = $statement->rowCount();
		if($count>0){
			echo "<script>alert('Email already exists!') </script>";

		}
		else{
		$name=$_POST['name'];
	    $lastname=$_POST['lastname'];
	    $email=$_POST['email'];
	    $number=$_POST['phone_number'];
	    $id=$_SESSION['id'];
		$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

		$sql = "UPDATE users SET name='$name', lastname='$lastname', email='$email', phone_number='$number', updated_at='$date', profile_image='$filename' WHERE id='$id'";
	    $statement = $conn->query($sql);

	    header('profile.php');

       }

	}

	function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM users WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }



}




?> 