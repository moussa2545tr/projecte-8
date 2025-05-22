
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"] ?? "";
    $email = $_POST["email"] ?? "";

    echo "Benvingut/da, $nom!<br>";
    echo "El teu correu és: $email";
}
?>
