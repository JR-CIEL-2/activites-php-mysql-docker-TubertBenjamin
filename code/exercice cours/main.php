<?php
include_once 'statistique.php';
include_once 'read_tab.php';
include_once 'tri_selection.php';

moyenne(array("francais" => 12, "maths" => 15, "histoire_geo" => 9));

mediane([2005, 2002, 2000, 2008, 2023, 2012, 2015]);
mediane([1500, 4500, 2200, 1500, 3300, 1800,1700, 2000,4000]);

$tableau1 = [64, 25, 12, 22, 11];
$tableau1_trie = tri_selection_valeur($tableau1);
afficher_tableau_valeur($tableau1_trie); 

$tableau2 = [45, 78, 32, 90, 65, 23];
tri_selection_reference($tableau2);  
afficher_tableau_reference($tableau2);  

?>
