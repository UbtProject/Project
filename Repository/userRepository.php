<?php 
//config.php eshte lidhja me databaz
include_once 'Includes/config.php';

 
class userRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }




	function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM users";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }



//funksioni qe perdoret per me insert nje user ne databaze (thirret prej registerController)
	function insertUser($user){
		//e run lidhjen e databazen mrena variables $conn
        $conn = $this->connection;
        //ni select i thjeshte qe e kontrollon a ekziston emaila ne databaz qe po munohet me register useri
        $sql = "SELECT Name FROM users WHERE email=?";
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['email']]);

		//e kontrollon a ka marr naj tdhane prej databazes, nese po $count bahet 1 qe dmth emaila ekziston, nese jo ateher emaila nuk ekziston dhe useri eshte i ri
		$count = $statement->rowCount();
		if($count>0){
			echo "<script>alert('Email already exists!') </script>";

		}
		else{
			//e perdor parametrin e funksionit tu i thirr getters edhe i run tdhanat ne variable
	    	$name = $user->getName();
	    	$lastname = $user->getLastname();
	    	$email = $user->getEmail();
	    	$password = $user->getPassword();
	    	$pNumber = $user->getNumber();
	    	$role = $user->getRole();
	    	//e run daten momentale se kur u kriju useri ne formatin:
	    	// day, date of month year, hour:minutes
	    	//example: Wednesday, 24th of February 2022, 11:29 PM
	    	$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

	        
	    	//e krijojm query per me i insertu tdhanat ne databaz
	    	$sql = "INSERT INTO users (name, lastname, email, password, phone_number, role, created_at) VALUES (?,?,?,?,?,?,?)";
	    	$statement = $conn->prepare($sql);
	    	$statement->execute([$name,$lastname,$email,$password,$pNumber,$role,$date]);
	    }
	}











//funksioni qe perdoret per me u login nje user (thirret prej loginController)
	function logIn(){
        $conn = $this->connection;

        //i run tdhanat qe vijn prej formes
        $email=$_POST['email'];
        $password=$_POST['password'];

        //e kontrollen nese emaila qe e ka shkrujt useri ekziston ne databazen tone
       	$sql = "SELECT id,name, role, password FROM users WHERE email='$email'";
		$statement = $conn->query($sql);
       	$user = $statement->fetch(PDO::FETCH_ASSOC);

       	//e run daten momentale se kur u log in useri ne formatin:
	    // day, date of month year, hour:minutes
	    //example: Wednesday, 24th of February 2022, 11:29 PM
		$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

		//rowcount e kthen numrin e rreshtave qe i kthen query nalt, nese ska kthy asnja eshte 0, nese ekziston emaila ateher eshte 1
		//kjo if statement i tregon qe emaila eshte shkruar gabim nese rowcount eshte ma i vogel se sa 1
		if($statement->rowCount() < 1){
       		echo "<script> alert('Email entered incorrectly!'); </script>";
		}
		else{
			//password_verify perdoret per me testu nese passwordi qe e ka shkruar useri eshte i barabart me passwordin hashed(te enkriptum) qe e kem ne databaza
       		if (!password_verify($password,$user['password'])) {
       			echo "<script> alert('Password entered incorrectly!'); </script>";
       		}
       		else{
       			//e startojm nje session qe perdoret per me rujt variabla qe munden me u perdor nqdo file
       			session_start();
       			$_SESSION['name'] = $user['name'];
       			$_SESSION['role'] = $user['role'];
       			$_SESSION['id'] = $user['id'];
       			//e shtojm kohen e fundit kur ka log in useri
       			$sql = "UPDATE users SET last_access='$date' WHERE email='$email'";
       			$statement = $conn->query($sql);
       			//tqon te profile.php pasi je log in
       			header("location:profile.php");
        	}
    	}

	}











//funksioni qe perdoret per me u edit nje user (thirret prej editController)

	function editUser(){

        $conn = $this->connection;
        //e run emrin e file prej formes mbrenda ni variable
      	$newfilename = $_FILES['myfile']['name'];
      	//e run IDn e userit qe vjen prej session ne nje variabes
	    $id=$_SESSION['id'];
	    //e merr emrin e profile image ne databaz te userit
	    $sql="SELECT profile_image FROM users WHERE id='$id'";
	    $statement = $conn->query($sql);
	    $files=$statement->fetch(PDO::FETCH_ASSOC);
	    //e run emrin e profile image mbrenda nje variable
	    $filename=$files['profile_image'];

	    //nese emri i file qe vjen prej formes NUK eshte i zbrazt ateher useri po munohet me ndrru foton e profilit
	    if(!empty($newfilename)){
	    	//nese emri i filename qe vjen prej databazes NUK eshte default.jpg ekzekutoje kodin mrena
	    	if($filename!="default.jpg"){
	    		//destinacioni i fotos se vjeter
	    		$destination = 'Resources/Profile Images/'. $filename;
	    		//fshije foton e vjeter qe eshte ne kete source
	    		unlink($destination);
	    	}
	    	//destinacioni ku duhet me u rujt file e ri, ja shtojm id te userit si identifikues (ne rast qe 2 usera e bajn upload foto me tnjejtin emer, id-ja nimon qe 1 file mos me overwrite tjetren)
	        $destination = 'Resources/Profile Images/'.$id . $newfilename;
	        //e rujm file qe vjen prej formes
	        $file = $_FILES['myfile']['tmp_name'];
	        //e caktojm emrin e ri te fotos qe duhet me u insert ne databaz
	        $filename= $id . $newfilename;
	        //e bajm upload file ne destinacionin qe e caktum me heret
	        move_uploaded_file($file, $destination);
	    }
	    //e bajm nje query qe kthen rezultat nese emaila qe po munohet me ndrru useri ekziston ne databaz
	    //id<>'$id' dmth qe mos me kontrollu vetvetin useri, sepse nese se ka ndryshu emailen tani gjithmon do tjet true
	    $sql = "SELECT * FROM users WHERE email=? AND id<>'$id'";
		$statement = $conn->prepare($sql);
		$statement->execute([$_POST['email']]);
		//nese tkthen rezultat ateher emaila ekziston
		$count = $statement->rowCount();
		if($count>0){
			echo "<script>alert('Email already exists!') </script>";
		}
		else{
			//i rujm tdhanat prej formes qe don me i ndryshu useri
		$name=$_POST['name'];
	    $lastname=$_POST['lastname'];
	    $email=$_POST['email'];
	    $number=$_POST['phone_number'];
	    //e run daten momentale se kur i ka edit tdhanat useri ne formatin:
	    // day, date of month year, hour:minutes
	    //example: Wednesday, 24th of February 2022, 11:29 PM
		$date = date("l").", ".date("jS \of F Y").", ".date("h:i A");

		//e krijojme nje query per me i update tdhanat ne databaz
		$sql = "UPDATE users SET name='$name', lastname='$lastname', email='$email', phone_number='$number', updated_at='$date', profile_image='$filename' WHERE id='$id'";
	    $statement = $conn->query($sql);

	    //te kthen apet te profile.php
	    header('profile.php');
       }
	}










//funksioni qe perdoret per me e kthy nje user specific baz parametrit qe ju dergohet
	function getUserById($id){
        $conn = $this->connection;

        //e krijojme nje query qe i merr tdhanat e userit baze te ids qe u dergu si parameter
        $sql = "SELECT * FROM users WHERE id='$id'";
        $statement = $conn->query($sql);
        $user = $statement->fetch();

        //i kthen qato tdhana te userit
        return $user;
    }

    function getNumberOfUsers(){
        $conn = $this->connection;
        $sql = "SELECT COUNT(*) as total FROM users";
        $statement = $conn->query($sql);
        $users = $statement->fetch();
        return $users;
    }

}




?> 