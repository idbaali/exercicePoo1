<?php

abstract class Vehicule {
    private $couleur;
    private $poids;
    private $nombre_porte;
    private $cylindree;
    private $longueur;
    private $nombre_pneus_neige;

    public abstract function ajouter_personne($poids_personne);

    // Method exist. Créer une méthode publique statique dans la classe Vehicule s’appelant afficher_attribut().
    public static function afficher_attribut($objet) {
        if (method_exists($objet,'getCouleur')) {
            echo "Couleur : ".$objet->getCouleur()."<br>";
        }
        if (method_exists($objet,'getPoids')) {
            echo "Poids : ".$objet->getPoids()."<br>";
        }
        if (method_exists($objet,'getNombre_porte')) {
            echo "Nombre de portes : ".$objet->getNombre_porte()."<br>";
        }
        if (method_exists($objet,'getCylindree')) {
            echo "Cylindree : ".$objet->getCylindree()."<br>";
        }
        if (method_exists($objet,'getLongueur')) {
            echo "Longueur : ".$objet->getLongueur()."<br>";
        }
        if (method_exists($objet,'getNombre_pneus_neige')) {
            echo "Nombre de pneus neige : ".$objet->getNombre_pneus_neige()."<br>";
        }
        /*
        echo "Poids : ".$objet->poids."<br>";
        echo "Nombre de portes : ".$objet->nombre_portes."<br>";
        echo "Cylindrée : ".$objet->cylindree."<br>";
        echo "Longueur : ".$objet->longueur."<br>";
        echo "Nombre de pneus neige : ".$objet->nombre_pneus_neige."<br>";
        */
    }

    public function __construct($couleur, $poids) {
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }

    public function rouler() {
        echo "Le véhicule roule.";
    }

}

