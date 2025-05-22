
<?php
$nom = $_GET["nom"] ?? "";
$edat = $_GET["edat"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && $nom && $edat) {
    echo "Nom: $nom<br>";
    echo "Edat: $edat";
}
?>
