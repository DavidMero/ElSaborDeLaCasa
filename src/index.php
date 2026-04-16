<?php include "config/db.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Sabor de la Casa</title>
    <link rel="stylesheet" href="assets/style.css?v=<?= time(); ?>">
</head>

<body>
    <?php include "components/header.php" ?>
    <div class="tarjetas">
        <?php 
        if (!empty($q)) {
            foreach ($resultado as $receta) {
                include "components/tarjeta.php";
            }
        }
        ?>
    </div>
</body>

</html>