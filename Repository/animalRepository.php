<?php 
//config.php eshte lidhja me databaz
include_once '../Includes/config.php';

 
class animalRepository{
	private $connection;

//konstruktori i klases qe e krijon connection me databaz tu e perdor config.php
	function __construct(){
        $conn = new config();
        $this->connection = $conn->startConnection();
    }

    function insertAnimal($animal){

        $conn = $this->connection;
        $name= $animal->getName();
        $price= $animal->getPrice();
        $description= $animal->getDescription();
        $filename = $_FILES['myfile']['name'];

        if (empty($filename)) {
            echo "<script>alert('Please upload an image!') </script>";
        }
        else{
            $sql = "SELECT ID FROM animals ORDER BY ID DESC LIMIT 1";
            $statement = $conn->query($sql);
            $animal = $statement->fetch(PDO::FETCH_ASSOC);
            $id=$animal['ID'] +1;
            $file = $_FILES['myfile']['tmp_name'];
            $destination = '../Resources/Animal Images/'.$id. $filename;
            $filename = $id.$filename;
            move_uploaded_file($file, $destination);


            $sql = "INSERT INTO animals (name, description, price, image) VALUES (?,?,?,?)";
            $statement = $conn->prepare($sql);
            $statement->execute([$name,$description,$price,$filename]);
            echo "<script>alert('Dogge!') </script>";

        }
    
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

    function editAnimal(){

        $conn = $this->connection;
        $newfilename = $_FILES['myfile']['name'];
        $id=$_GET['id'];
        $sql="SELECT image FROM animals WHERE id='$id'";
        $statement = $conn->query($sql);
        $files=$statement->fetch(PDO::FETCH_ASSOC);
        $filename=$files['image'];

        if(!empty($newfilename)){
            
            $destination = '../Resources/Animal Images/'. $filename;
            unlink($destination);
            $destination = '../Resources/Animal Images/'.$id . $newfilename;
            $file = $_FILES['myfile']['tmp_name'];
            $filename= $id . $newfilename;
            move_uploaded_file($file, $destination);
        }

        $name=$_POST['name'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $sql = "UPDATE animals SET name='$name', price='$price', description='$description', image='$filename' WHERE id='$id'";
        $statement = $conn->query($sql);
    }

    function deleteAnimal($id){
        $conn = $this->connection;

        $sql = "DELETE FROM animals WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

   }
    
}
?> 