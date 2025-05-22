
<?php
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$assumpte = $_POST["assumpte"] ?? "";
$missatge = $_POST["missatge"] ?? "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$nom || !$email || !$assumpte || !$missatge) {
        $errors[] = "Tots els camps són obligatoris.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Correu electrònic invàlid.";
    }

    if (!$errors) {
        echo "<p style='color:green;'>Missatge enviat correctament!</p>";
        exit;
    }
}
?>

<form method="post">
    Nom: <input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>"><br>
    Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
    Assumpte: <input type="text" name="assumpte" value="<?php echo htmlspecialchars($assumpte); ?>"><br>
    Missatge: <textarea name="missatge"><?php echo htmlspecialchars($missatge); ?></textarea><br>
    <input type="submit" value="Enviar">
</form>

<?php
foreach ($errors as $e) {
    echo "<p style='color:red;'>$e</p>";
}
?>
