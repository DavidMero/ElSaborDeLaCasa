<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Sabor de la Casa</title>
    <link rel="stylesheet" href="./assets/css/principal.css">
    <link rel="stylesheet" href="./assets/css/componentes.css">
    <?php include "config/db.php"?>
</head>

<body class="pagina-principal">

    <header>
        <?php include "components/cabecera.php" ?>
    </header>

    <main class="tarjetas">
        <?php
        if (!empty($q)) {
            foreach ($recetas as $receta) {
                include "components/tarjeta.php";
            }
        }
        ?>
    </main>
    <footer>
        <?php include "components/footer.php" ?>
    </footer>
    <script src="./assets/js/scripts.js"></script>
</body>