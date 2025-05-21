<?php
$nom = $_GET["nom"] ?? "";
$edat = $_GET["edat"] ?? "";
?>
<form method="get">
    Nom: <input type="text" name="nom"><br>
    Edat: <input type="number" name="edat"><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && $nom && $edat) {
    echo "Nom: $nom<br>";
    echo "Edat: $edat";
}
?>