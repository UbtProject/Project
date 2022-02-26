<?php
include_once '../Repository/cartRepository.php';
if(isset($_POST['addToCartBtn'])){
        $animalId=$_GET['id'];
        $cartRepository = new cartRepository();
        $cartRepository->addToCart($animalId);
    }

?>