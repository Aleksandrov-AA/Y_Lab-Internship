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
        echo "Реализуем обязательный метод save.<br>";
    }

    public function new(){
        echo "\r\nРеализуем обязательный метод new.<br>";
    }

    function getName(){
        print_r(parent::getName() . "Здорово!");
    }

}

$user1 = new Intern;
$user1->save();
$user1->new();
$user1->getName();
