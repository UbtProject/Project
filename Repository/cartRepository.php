<?php 
include_once 'Includes/config.php';

 
class cartRepository{
	private $connection;
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }



    function addToCart($animalID){
        $conn = $this->connection;

        $sql = "SELECT * FROM animals WHERE ID='$animalID'";
        $statement = $conn->query($sql);
        $animal = $statement->fetch();
        $sql = "INSERT INTO cart (userID, name, description, image, price) VALUES (?,?,?,?,?)";
	    $statement = $conn->prepare($sql);
	    $statement->execute([$_SESSION['id'],$animal['name'],$animal['description'],$animal['image'],$animal['price']]);
	    $sql = "DELETE FROM animals WHERE ID='$animalID'";
	    $statement = $conn->query($sql);
       	header("location:cart.php");
    }
    
    function getAllCartAnimals(){
        $conn = $this->connection;
        $id=$_SESSION['id'];
        $sql = "SELECT * FROM cart WHERE userID='$id'";

        $statement = $conn->query($sql);
        $animals = $statement->fetchAll();

        return $animals;
    }
}