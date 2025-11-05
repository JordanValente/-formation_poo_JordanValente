<?php
class Arena {
    public function lancerCombat(Creature $c1, Creature $c2) {
        echo "<h2 style='color:darkred;'>=-_Combat entre {$c1->getNom()} et {$c2->getNom()}_-=</h2>";
        echo "<p><strong>{$c1->getNom()} :</strong> {$c1->crier()}<br>";
        echo "<strong>{$c2->getNom()} :</strong> {$c2->crier()}</p><br>";

        $tour = 1;

        while ($c1->estEnVie() && $c2->estEnVie()) {
            echo "<div style='background:#f0f0f0;padding:10px;margin-bottom:10px;border-left:5px solid #333;'>";
            echo "<h3 color='red'>Tour $tour</h3>";

            if ($c1->estEnVie()) {
                echo "<p><em>{$c1->getNom()} attaque :</em><br>";
                $c1->attaquer($c2);
                echo "</p>";
            }

            if ($c2->estEnVie()) {
                echo "<p><em>{$c2->getNom()} contre-attaque :</em><br>";
                $c2->attaquer($c1);
                echo "</p>";
            }

            echo "</div>";
            $tour++;
        }

        $vainqueur = $c1->estEnVie() ? $c1->getNom() : $c2->getNom();
        echo "<h3 style='color:green;'>-==== Le combat est terminé. Vainqueur : $vainqueur ====-</h3>";
    }
}
?>
