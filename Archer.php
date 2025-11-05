<?php
class Archer extends Creature {
    public function __construct($nom) {
        parent::__construct($nom, 120, 15, 8);
    }

    public function recevoirDegats(int $degats) {
        if (rand(1, 100) <= 30) {
            echo "{$this->nom} esquive l'attaque !<br>";
        } else {
            parent::recevoirDegats($degats);
        }
    }

    public function crier() {
        return "Prêt à viser !";
    }
}
