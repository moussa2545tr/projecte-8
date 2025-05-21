<?php
$alumnes = [
    "Anna" => 17,
    "Marc" => 18,
    "Júlia" => 20,
    "Pau" => 16
];

foreach ($alumnes as $nom => $edat) {
    if ($edat >= 18) {
        echo "$nom té $edat anys\n";
    }
}
?>