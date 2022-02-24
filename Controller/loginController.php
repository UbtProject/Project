<?php
//e thirr kodin qe eshte ne userRepository.php
include_once 'Repository/userRepository.php';
//e kqyr nese u kliku butoni me name="loginBtn"
if(isset($_POST['loginBtn'])){
    //e krijon ni instance te UserRepository
    $userRepository = new UserRepository();
    //e thirr funksionin editUser();
    $userRepository->logIn();
}
?>