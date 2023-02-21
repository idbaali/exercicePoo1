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
}