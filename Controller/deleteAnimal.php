<?php

$animalID = $_GET['id'];
include_once '../Repository/animalRepository.php';



$animalRepository = new animalRepository();
$animalRepository->deleteAnimal($animalID);
header("location:../View/dashboard.php");


?>