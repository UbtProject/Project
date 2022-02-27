<?php
class contact{
    private $name;
    private $email;
    private $number;
    private $feedback;

    function __construct($name,$number,$email,$feedback){
            $this->name = $name;
            $this->feedback = $feedback;
            $this->email = $email;
            $this->number = $number;
    }


    function getName(){
        return $this->name;
    }
    function getFeedback(){
        return $this->feedback;
    }
    function getEmail(){
        return $this->email;
    }
    function getNumber(){
        return $this->number;
    }
}




?>