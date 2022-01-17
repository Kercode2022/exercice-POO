<?php

require_once("./Animal.php");

class Poule{
    public function __construct(string $nom){
        Animal::__construct($nom, 10, 10, 10);
    }

    public function caquetter(){
        echo "Côt côt".PHP_EOL;
    }
}