<?php

include_once '../Repository/volunteerRepository.php';
include_once '../Models/volunteer.php';
if(isset($_POST['volunteerSubmit'])){

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $volunteer  = new Volunteer($name,$lastname,$email,$number);
    $volunteerRepository = new volunteerRepository();
    $volunteerRepository->insertVolunteer($volunteer);
}
?>