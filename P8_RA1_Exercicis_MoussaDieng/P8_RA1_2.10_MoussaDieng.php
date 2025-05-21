<?php
$usuaris = [
    ["nom" => "Anna", "correu" => "anna@example.com", "edat" => 20],
    ["nom" => "Marc", "correu" => "marc@example.com", "edat" => 16],
    ["nom" => "Laura", "correu" => "laura@example.com", "edat" => 18],
];

function mostrarTaula($usuaris) {
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Correu</th><th>Edat</th><th>Major d’edat?</th></tr>";
    foreach ($usuaris as $usuari) {
        $major = ($usuari["edat"] >= 18) ? "Sí" : "No";
        echo "<tr>
                <td>{$usuari['nom']}</td>
                <td>{$usuari['correu']}</td>
                <td>{$usuari['edat']}</td>
                <td>$major</td>
              </tr>";
    }
    echo "</table>";
}

mostrarTaula($usuaris);
?>