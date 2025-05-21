<?php
$numero = readline("Introdueix un número de l'1 al 10: ");
for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}
?>