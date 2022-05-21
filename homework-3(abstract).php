<?php

$name = "Aleksandr";
$surname = "Aleksandrov";


abstract class User{
    public $name;
    public $surname;

    abstract public function save();

    abstract public function new();

    public function getName(){
        print_r("ДЗ Сделал.");
    }
}

class Intern extends User{
   
    public function save(){

    }

    public function new(){

    }

    function getName(){
        print_r("ДЗ Сделал. Здорово!");
    }

}

$user1 = new Intern;
$user1->getName();
