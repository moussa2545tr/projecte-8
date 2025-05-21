<?php
$comentari = $_POST["comentari"] ?? "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentari = htmlspecialchars($comentari);
    echo "Comentari: $comentari";
}
?>
<form method="post">
    Comentari:<br>
    <textarea name="comentari"></textarea><br>
    <input type="submit" value="Enviar">
</form>