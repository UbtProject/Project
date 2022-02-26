<?php

include_once '../Repository/cartRepository.php';
include_once '../Models/animal.php';
if(isset($_POST['editBtn'])){
    $cartRepository = new cartRepository();
    $cartRepository->editAdoption();
}
?>