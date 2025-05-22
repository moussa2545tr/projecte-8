
<?php
$errors = [];
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$missatge = $_POST["missatge"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$nom || !$email || !$missatge) {
        $errors[] = "Tots els camps són obligatoris.";
    } else {
        echo "Nom: $nom<br>Email: $email<br>Missatge: $missatge";
    }
}

foreach ($errors as $e) {
    echo "<p style='color:red;'>$e</p>";
}
?>
