<?php
$genere = $_POST["genere"] ?? "";
?>
<form method="post">
    Gènere:<br>
    <input type="radio" name="genere" value="Home"> Home<br>
    <input type="radio" name="genere" value="Dona"> Dona<br>
    <input type="radio" name="genere" value="Altres"> Altres<br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($genere) {
    echo "Gènere seleccionat: $genere";
}
?>