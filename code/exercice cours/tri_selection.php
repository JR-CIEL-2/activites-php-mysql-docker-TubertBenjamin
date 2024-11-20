<?php
function tri_selection(array $t) {
    $n = sizeof($t);
    
    for ($i = 0; $i < $n - 1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if ($t[$j] < $t[$min]) {
                $min = $j; 
            }
        }

        if ($min != $i) {
            $t[$i] = $t[$min];
            $t[$min] = $t[$i];;
        }
    }

    return $t;
}
?>
