<?php

class Ferme{
    private array $vaches = [];
    private array $poules = [];
    private array $moutons = [];

    public function ajouterVache(Vache $vache){
         array_push($this->vaches, $vache);
    }
    public function ajouterPoule(Poule $poule){
        array_push($this->poules, $poule);
    }
    public function ajouterMouton(Mouton $mouton){
        array_push($this->moutons, $mouton);
    }
    
    

    public function compter(){
        return count($this->vaches) + count($this->poules) + count($this->moutons);
    }

    public function nourrir(){
        foreach($this->vaches as $vache){
            $vache->manger();
        }
        foreach($this->poules as $poule){
            $poule->manger();
        }
        foreach($this->moutons as $mouton){
            $mouton->manger();
        }
        
    }

    public function faireSortir(){
        foreach($this->vaches as $vache){
            $vache->sortir();
        }
        foreach($this->poules as $poule){
            $poule->sortir();
        }
        foreach($this->moutons as $mouton){
            $mouton->sortir();
        }
    }

    public function coucher(){
        foreach($this->vaches as $vache){
            $vache->dormir();
        }
        foreach($this->poules as $poule){
            $poule->dormir();
        }
        foreach($this->moutons as $mouton){
            $mouton->dormir();
        }
    }



}