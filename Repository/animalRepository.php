<?php 
//config.php eshte lidhja me databaz
include_once 'Includes/config.php';

 
class animalRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }


    function getAllAnimals(){
        $conn = $this->connection;

        $sql = "SELECT * FROM animals";

        $statement = $conn->query($sql);
        $animals = $statement->fetchAll();

        return $animals;
    }
    
    function getOlderAnimals(){
        $conn = $this->connection;

        $sql = "SELECT * FROM animals ORDER BY ID LIMIT 4";

        $statement = $conn->query($sql);
        $animals = $statement->fetchAll();

        return $animals;
    }

    function getNewerAnimals(){
        $conn = $this->connection;

        $sql = "SELECT * FROM animals ORDER BY ID DESC LIMIT 4";

        $statement = $conn->query($sql);
        $animals = $statement->fetchAll();

        return $animals;
    }

    function getAnimalById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM animals WHERE ID='$id'";

        $statement = $conn->query($sql);
        $animal = $statement->fetch();

        return $animal;
    }
    function getNumberOfAnimals(){
        $conn = $this->connection;
        $sql = "SELECT COUNT(*) as total FROM animals";
        $statement = $conn->query($sql);
        $animals = $statement->fetch();
        return $animals;
    }
    
}
?> 