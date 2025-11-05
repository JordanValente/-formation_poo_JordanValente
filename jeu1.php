<?php
require_once 'Creature.php';
require_once 'Guerrier.php';
require_once 'Mage.php';
require_once 'Archer.php';
require_once 'Arena.php';


$creatures = [
        "guerrier" => new Guerrier("LeSpartiate"),
        "mage" => new Mage("HenryPotDeBeurre"),
        "archer" => new Archer("Lafleche")
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choix1 = $_POST['creature1'];
    $choix2 = $_POST['creature2'];

    if ($choix1 !== $choix2 && isset($creatures[$choix1]) && isset($creatures[$choix2])) {
        $arena = new Arena();
        $arena->lancerCombat($creatures[$choix1], $creatures[$choix2]);
    } else {
        echo "<p style='color:red;'>Veuillez choisir deux créatures différentes.</p>";
    }
}
?>


<form method="post">
    <label for="creature1">Choisissez le premier combattant :</label>
    <select name="creature1" id="creature1">
        <option value="guerrier">Guerrier (LeSpartiate)</option>
        <option value="mage">Mage (HenryPotDeBeurre)</option>
        <option value="archer">Archer (Lafleche)</option>
    </select>

    <br><br>

    <label for="creature2">Choisissez le second combattant :</label>
    <select name="creature2" id="creature2">
        <option value="guerrier">Guerrier (LeSpartiate)</option>
        <option value="mage">Mage (HenryPotDeBeurre)</option>
        <option value="archer">Archer (Lafleche)</option>
    </select>

    <br><br>
    <button type="submit">Lancer le combat</button>
</form>
