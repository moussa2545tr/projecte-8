<?php
function factorial($num) {
    $resultat = 1;
    for ($i = 1; $i <= $num; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}

echo factorial(5);
?>