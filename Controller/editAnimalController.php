<?php
include_once '../Repository/animalRepository.php';
if(isset($_POST['editBtn'])){
    
        $animalRepository = new animalRepository();
        $animalRepository->editAnimal();
    }

?>