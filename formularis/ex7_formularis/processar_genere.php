
<?php
$genere = $_POST["genere"] ?? "";

if ($genere) {
    echo "Gènere seleccionat: $genere";
} else {
    echo "No has seleccionat cap gènere.";
}
?>
