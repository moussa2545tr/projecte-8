<?php
$nom = $_POST["nom"] ?? "";
$email = $_POST["email"] ?? "";
$missatge = $_POST["missatge"] ?? "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!$nom || !$email || !$missatge) {
        $error = "Omple tots els camps.";
    } else {
        echo "Enviat correctament!";
    }
}
?>
<form method="post">
    Nom: <input type="text" name="nom" value="<?php echo $nom; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>
    Missatge: <textarea name="missatge"><?php echo $missatge; ?></textarea><br>
    <input type="submit" value="Enviar">
</form>
<p style="color:red;"><?php echo $error; ?></p>