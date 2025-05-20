<?php
$nom = "Clara";
$data = date("d/m/Y");
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Targeta Personal</title>
    <style>
        .targeta {
            border: 2px solid #444;
            padding: 20px;
            width: 300px;
            font-family: Arial;
            text-align: center;
        }
        .imatge {
            width: 100px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="targeta">
        <h2><?php echo $nom; ?></h2>
        <img src="https://via.placeholder.com/100" class="imatge" alt="Foto">
        <p>Data: <?php echo $data; ?></p>
        <p>Benvingut/da al meu perfil!</p>
    </div>
</body>
</html>