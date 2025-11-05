<?php

class Mage extends Creature
{
    public function __construct($nom)
    {
        parent::__construct($nom, 100, 30, 5);
    }

    public function attaquer(Creature $adversaire)
    {
        $degats = max(0, ($this->force + 10) - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        echo "{$this->getNom()} lance un sort sur {$adversaire->getNom()} et inflige $degats points de dégâts.<br>";
    }

    public function crier()
    {
        return "Abracadabra !";
    }
}

?>
