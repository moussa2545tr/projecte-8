
<?php
$comentari = $_POST["comentari"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentari = htmlspecialchars($comentari);
    echo "Comentari: $comentari";
}
?>
