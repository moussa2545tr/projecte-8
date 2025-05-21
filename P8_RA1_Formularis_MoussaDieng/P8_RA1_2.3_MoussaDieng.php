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
?>
<form method="post">
    Nom: <input type="text" name="nom"><br>
    Email: <input type="email" name="email"><br>
    Missatge: <textarea name="missatge"></textarea><br>
    <input type="submit" value="Enviar">
</form>
<?php foreach ($errors as $e) echo "<p style='color:red;'>$e</p>"; ?>