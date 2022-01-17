<?php

require_once ("./Vache.php");
require_once ("./Poule.php");
require_once ("./Mouton.php");
require_once ("./Ferme.php");


$ferme = new Ferme();
$ferme->ajouterVache(new Vache("Marguerite"));
$ferme->ajouterPoule(new Poule("Coquillette"));
$ferme->ajouterMouton(new Mouton("Maurice"));

var_dump($ferme);
