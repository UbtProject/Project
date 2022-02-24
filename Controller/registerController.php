<?php
//e thirr kodin qe eshte ne userRepository.php edhe kodin ne user.php (ku krijohen objektet)

include_once 'Repository/userRepository.php';
include_once 'Models/user.php';
//e kqyr nese u kliku butoni me name="registerBtn"
if(isset($_POST['registerBtn'])){
    //i run tdhanat prej formes ne variable
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    //passwordin e inkripton ne hash
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    //e thirr konstruktorin e Userit edhe e krijon ni objekt tri
    $user  = new User($name,$lastname,$email,$password,$number);
    //e krijon ni instance te UserRepository
    $userRepository = new UserRepository();
    //e thirr funksionin insertUser(); edhe e dergon objektin qe sa e krijum si parameter
    $userRepository->insertUser($user);
}
?>