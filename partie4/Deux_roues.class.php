<?php

class Deux_roues extends Vehicule {
    private $cylindree;
    

    function __construct($couleur, $poids, $cylindree) {
        parent::__construct($couleur, $poids);
        $this->cylindree = $cylindree;
      }


    public function getCylindree() {
        return $this->cylindree;
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }



    public function mettre_essence($nombre_litre) {
        $this->setPoids($nombre_litre + $this->getPoids());
        echo "Ajout de " . $nombre_litre . " litres d'essence.";
    }

    public function ajouter_personne($poids_personne) {
        $this->setPoids($this->getPoids() +  $poids_personne + 2);
       // $this->poids += $poids_personne + 2;
    }   
}