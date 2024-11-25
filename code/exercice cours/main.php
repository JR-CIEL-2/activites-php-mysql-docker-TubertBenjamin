<?php
include_once 'statistique.php';
include_once 'read_tab.php';
include_once 'tri_selection.php';
include_once 'triangle.php';


echo "<pre>";


echo "Moyenne des matières :\n";
moyenne(array("francais" => 12, "maths" => 15, "histoire_geo" => 9));

echo "\n";


echo "Médiane des années :\n";
mediane([2005, 2002, 2000, 2008, 2023, 2012, 2015]);
mediane([1500, 4500, 2200, 1500, 3300, 1800, 1700, 2000, 4000]);

echo "\n";

// Tri du premier tableau
echo "Tri du premier tableau :\n";
$tableau1 = [64, 25, 12, 22, 11];
$tableau1_trie = tri_selection_valeur($tableau1);
afficher_tableau_valeur($tableau1_trie);

echo "\n";


echo "Tri du deuxième tableau :\n";
$tableau2 = [45, 78, 32, 90, 65, 23];
tri_selection_reference($tableau2);
afficher_tableau_reference($tableau2);

echo "\n";


echo "Affichage du triangle :\n";
triangle(10);

echo "</pre>";
?>
