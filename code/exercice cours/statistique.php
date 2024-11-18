<?php
    function moyenne(array $notes) {
        $nb_notes = 0;
        $total = 0;
        foreach($notes as $matiere => $note) {
            $nb_notes += 1;
            $total += $note;
        }
        echo "la moyenne est de ".$total/$nb_notes."/20\n";
    }
?>
