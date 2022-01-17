<?php

require_once("./Animal.php");

class Mouton{
    public function __construct(string $nom){
        Animal::__construct($nom, 10, 10, 10);
    }

    public function beler(){
        echo "Mêêêh".PHP_EOL;
    }
}