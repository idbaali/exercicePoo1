<?php
class Voiture extends Quatre_roues {
    private $nombre_pneu_neige;


    public function __construct($couleur, $poids, $nombre_porte, $nombre_pneu_neige) {
        parent::__construct($couleur, $poids, $nombre_porte);
        $this->nombre_pneu_neige = $nombre_pneu_neige;
    }


    public function ajouter_pneu_neige($nombre) {
        $this->nombre_pneu_neige += $nombre;
    }


    public function enlever_pneu_neige($nombre) {
        $this->nombre_pneu_neige -= $nombre;
    }

    // Substituer la méthode publique ajouter_personne(poids_personne) dans la classe Voiture. Cette méthode exécute la méthode ajouter_personne(poids_personne)
    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }

    public  function getPoids() {
        return $this->Poids;
    }

    public function setPoids($poids)  {
        $this->$poids = $poids;
    }


}