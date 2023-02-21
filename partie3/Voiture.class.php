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
}