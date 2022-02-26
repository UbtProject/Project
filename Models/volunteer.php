<?php
class Volunteer{
    private $name;
    private $lastname;
    private $email;
    private $number;

    function __construct($name,$lastname,$email,$number){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
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
    function getNumber(){
        return $this->number;
    }
}




?>