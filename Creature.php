<?php

class Creature
{
    protected $nom;
    protected $sante;
    protected $force;
    protected $defense;

    public function __construct($nom, $sante, $force, $defense)
    {
        $this->nom = $nom;
        $this->sante = $sante;
        $this->force = $force;
        $this->defense = $defense;
    }

    public function attaquer(Creature $adversaire)
    {
        $degats = max(0, $this->force - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        echo "{$this->nom} attaque {$adversaire->getNom()} et inflige $degats points de dégâts.<br>";

    }

    public function recevoirDegats(int $degats)
    {
        $this->sante -= $degats;
        echo "{$this->getNom()} reçoit $degats points de dégâts. Santé restante : {$this->sante}<br>";

    }

    public function estEnVie()
    {
        return $this->sante > 0;
    }

    public function crier()
    {
        return "{$this->nom} pousse un cri !";
    }

    public function getNom()
    {
        return $this->nom;
    }
}
