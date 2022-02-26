<?php

include_once '../Repository/animalRepository.php';
include_once '../Models/animal.php';
if(isset($_POST['addAnimalButton'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = "<p>".$_POST['text1']."</p>"."<p>".$_POST['text2']."</p>"."<p>".$_POST['text3']."</p>";
    
    $animal  = new Animal($name,$price,$description);
    $animalRepository = new animalRepository();
    $animalRepository->insertAnimal($animal);
    $file = $_FILES['myfile']['tmp_name'];

}
?>