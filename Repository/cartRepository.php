<?php 
include_once '../Includes/config.php';

 
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
    function getTotalOfWinnings(){
        $conn = $this->connection;
        $sql = "SELECT SUM(price) as total FROM cart";
        $statement = $conn->query($sql);
        $animals = $statement->fetch();
        return $animals;
    }
    function getNumberOfAdoptions(){
        $conn = $this->connection;
        $sql = "SELECT COUNT(*) as total FROM cart";
        $statement = $conn->query($sql);
        $adoptions = $statement->fetch();
        return $adoptions;
    }
    function getAllItems(){
        $conn = $this->connection;

        $sql = "SELECT * FROM cart";

        $statement = $conn->query($sql);
        $items = $statement->fetchAll();

        return $items;
    }
    function getCartById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM cart WHERE ID='$id'";

        $statement = $conn->query($sql);
        $animal = $statement->fetch();

        return $animal;
    }
    function editAdoption(){

        $conn = $this->connection;
       
        $id=$_GET['id'];
        $delivered=$_POST['delivered'];
        $sql = "UPDATE cart SET delivered='$delivered' WHERE id='$id'";
        $statement = $conn->query($sql);
    }
}