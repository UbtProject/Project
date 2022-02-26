<?php
class Animal{
    private $name;
    private $price;
    private $description;
    

    function __construct($name,$price,$description){
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
    }


    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
    function getDescription(){
        return $this->description;
    }
}




?>