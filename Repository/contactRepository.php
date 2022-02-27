<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class contactRepository{
	private $connection;

	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }


    function insertContact($contact){
    	$conn = $this->connection;
        $name = $contact->getName();
        $email = $contact->getEmail();
        $number = $contact->getNumber();
        $feedback = $contact->getFeedback();
	    
	    $sql = "INSERT INTO feedback (name, email, phone_number, feedback) VALUES (?,?,?,?)";
	    $statement = $conn->prepare($sql);
	    $statement->execute([$name,$email,$number,$feedback]);

	}

	function getAllFeedbacks(){
        $conn = $this->connection;

        $sql = "SELECT * FROM feedback";

        $statement = $conn->query($sql);
        $feedbacks = $statement->fetchAll();

        return $feedbacks;
    }
}




?> 