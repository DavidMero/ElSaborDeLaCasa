<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/recetas.css">
    <link rel="stylesheet" href="../assets/css/componentes.css">
    <title>Document</title>
    <?php include "../config/db.php" ?>
</head>

<body class="pagina-receta">
    <header><?php include '../components/cabecera.php' ?></header>
    <img src="" alt="Portada" class="portada">
    <main>
        <aside>
            <?php echo $receta['nombre'] ?>
            <div class="herramientas">
                <img src="enlace" alt="compartir">
                <img src="enlace" alt="favoritos">
                <img src="enlace" alt="guardar">
            </div>
            <div class="categorias">
                <!-- Comienza componente -->
                <div class="categoria">
                    categoria 1
                </div>
                <!-- Fin componente -->
                <div class="categoria">
                    categoria 2
                </div>
            </div>
            <ul class="ingredientes">
                <p>Ingedientes:</p>
                <!-- Comienza componente -->
                <li class="ingrediente">ingrediente 1</li>
                <!-- Fin componente -->
                <li class="ingrediente">ingrediente 2</li>
            </ul>
        </aside>
        <section class="instrucciones">
            <!-- Comienza componente -->
            <div class="intruccion">
                Este es un paso para una receta
            </div>
            <!-- Fin componente -->
            <div class="intruccion">
                Este es un paso para una receta
            </div>
        </section>
    </main>
    <div class="comentarios">
        <!-- Comienza componente -->
        <div class="comentario">
            <div class="usuario">
                <img src="" alt="foto-perfil">
                <h5>Nombre de usuario</h5>
            </div>
            <p>Fecha de envío</p>
            <p>Texto de ejemplo que envían un comentario</p>
            <img src="enlace" alt="corazon">
        </div>
        <!-- Fin componente -->
    </div>
    <footer><?php include '../components/footer.php' ?></footer>
</body>

</html>