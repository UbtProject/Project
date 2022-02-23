<?php
include_once 'Repository/userRepository.php';

if(isset($_POST['loginBtn'])){
    $userRepository = new UserRepository();
    $userRepository->logIn();
}
?>