<?php
if (isset($_GET['ID'])) {
$animalID = $_GET['ID'];
include_once '../Repository/animalRepository.php';



$animalRepository = new animalRepository();
$animalRepository->deleteAnimal($animalID);
header("location:../View/dashboard.php");

}
?>