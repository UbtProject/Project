<?php
if (isset($_GET['id'])) {
$userId = $_GET['id'];
include_once '../Repository/userRepository.php';



$userRepository = new UserRepository();
$userRepository->deleteUser($userId);
header("location:../View/dashboard.php");

}
?>