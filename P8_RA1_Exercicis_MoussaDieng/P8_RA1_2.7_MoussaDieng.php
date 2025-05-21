<?php
function preuAmbIVA($preu, $iva) {
    return $preu + ($preu * $iva / 100);
}

echo preuAmbIVA(100, 21);
?>