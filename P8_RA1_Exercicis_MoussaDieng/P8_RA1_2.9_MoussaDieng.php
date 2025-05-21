<?php
$notes = [6, 7, 4, 8];
$mitjana = array_sum($notes) / count($notes);
echo "Nota mitjana: $mitjana\n";

if ($mitjana >= 5) {
    echo "Estàs aprovat.";
} else {
    echo "Estàs suspès.";
}
?>