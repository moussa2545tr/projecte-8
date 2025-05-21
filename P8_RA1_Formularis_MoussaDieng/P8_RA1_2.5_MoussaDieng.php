<?php
$aficions = $_POST["aficions"] ?? [];
?>
<form method="post">
    Aficions:<br>
    <input type="checkbox" name="aficions[]" value="Esport"> Esport<br>
    <input type="checkbox" name="aficions[]" value="Lectura"> Lectura<br>
    <input type="checkbox" name="aficions[]" value="Música"> Música<br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($aficions) {
    echo "Has seleccionat:<ul>";
    foreach ($aficions as $a) echo "<li>$a</li>";
    echo "</ul>";
}
?>