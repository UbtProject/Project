<?php
//klasa per user
class User{
    private $name;
    private $lastname;
    private $email;
    private $number;


//konstruktori qe e krijon objektin Uer
    function __construct($name,$lastname,$email,$password,$number){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
            $this->number = $number;
    }


    //getters per me i marr tdhanat prej objektit
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