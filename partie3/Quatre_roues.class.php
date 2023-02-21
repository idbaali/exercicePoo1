<?php

class Quatre_roues extends Vehicule {
    private $nombre_porte;


    function __construct($couleur, $poids, $nombre_porte) {
        parent::__construct($couleur, $poids);
        $this->nombre_porte = $nombre_porte;
      }


    public function getNombre_porte() {
        return $this->nombre_porte;
    }

    public function setNombre_porte($nombre_porte) {
        $this->nombre_porte = $nombre_porte;
    }

    

    public function repeindre($couleur) {
        $this->couleur = $couleur;
    }
}
