<?php

require_once("./Animal.php");

class Vache{
    public function __construct(string $nom){
        Animal::__construct($nom, 10, 10, 10);
    }

    public function meugler(){
        echo "Meuh".PHP_EOL;
    }
}