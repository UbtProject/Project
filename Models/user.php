<?php

class User{
    private $name;
    private $lastname;
    private $email;
    private $number;



    function __construct($name,$lastname,$email,$password,$number){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
            $this->number = $number;


    }


    
    function getName(){
        return $this->name;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getNumber(){
        return $this->number;
    }
    
}




?>