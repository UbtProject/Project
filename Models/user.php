<?php
//klasa per user
class User{
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $number;
    private $role;

//konstruktori qe e krijon objektin User
    function __construct($name,$lastname,$email,$password,$number,$role){
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->password = $password;
            $this->number = $number;
            $this->role = $role;
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
    function getRole(){
        return $this->role;
    }
}
?>