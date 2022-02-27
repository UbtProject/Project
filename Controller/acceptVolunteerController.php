<?php

include_once '../Repository/userRepository.php';
include_once '../Repository/volunteerRepository.php';
include_once '../Models/user.php';
if(isset($_POST['registerBtn'])){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = "admin";
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $user  = new User($name,$lastname,$email,$password,$number,$role);
    $volunteerRepository = new volunteerRepository();
    $volunteerRepository->deleteVolunteer($_GET['id']);
    $userRepository = new UserRepository();
    $userRepository->insertUser($user);
    header("location:../View/dashboard.php");
}
?>