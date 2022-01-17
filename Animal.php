<?php

abstract class Animal{
    private string $nom;
    private int $faim;
    private int $airFrais;
    private int $dodo;

    public function __construct(string $nom, int $faim, int $airFrais, int $dodo){
        $this->nom = $nom;
        $this->faim = $faim;
        $this->airFrais = $airFrais;
        $this->dodo = $dodo;
    }

    public function manger(){
        $this->faim += 1;
        $this->airFrais -= 1;
        $this->dodo -= 1;
    }

    public function sortir(){
        $this->faim -= 1;
        $this->airFrais += 1;
        $this->dodo -= 1;
    }

    public function dormir(){
        $this->faim -= 1;
        $this->airFrais -= 1;
        $this->dodo -= 1;
    }

    
}