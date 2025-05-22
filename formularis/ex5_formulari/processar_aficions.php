
<?php
$aficions = $_POST["aficions"] ?? [];

if ($aficions) {
    echo "Has seleccionat:<ul>";
    foreach ($aficions as $a) {
        echo "<li>$a</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No has seleccionat cap afició.</p>";
}
?>
