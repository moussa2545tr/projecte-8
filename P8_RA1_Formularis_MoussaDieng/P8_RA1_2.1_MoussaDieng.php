<?php
$nom = $_POST["nom"] ?? "";
?>
<form method="post">
    Nom: <input type="text" name="nom">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Benvingut/da, $nom!";
}
?>