<?php

include_once '../Repository/contactRepository.php';
include_once '../Models/contact.php';
if(isset($_POST['addFeedback'])){

    $name = $_POST['name'];
    $feedback = $_POST['feedback'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $contact  = new contact($name,$number,$email,$feedback);
    $contactRepository = new contactRepository();
    $contactRepository->insertContact($contact);
    header("location:contact.php");

}
?>