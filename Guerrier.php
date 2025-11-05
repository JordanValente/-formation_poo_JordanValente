<?php
require_once 'Creature.php';

class Guerrier extends Creature
{
    public function __construct($nom)
    {
        parent::__construct($nom, 150, 20, 10);
    }

    public function crier()
    {
        return "Pour la gloire !";
    }
}
