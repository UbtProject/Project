<?php
include_once 'Repository/userRepository.php';

if(isset($_POST['editBtn'])){
    
   
        $userRepository = new UserRepository();
        $userRepository->editUser();
    }

?>