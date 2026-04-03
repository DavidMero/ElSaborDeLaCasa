<section>
    <form action="index.php" method="post" id="formulario">
        <input type="text" name="nombre" placeholder="Buscar receta">
        <img src="" alt="">
        <input type="submit">
    </form>
</section>
<?php
include "database/db.php";

$conexion = conexionDB();

$q = $_POST['nombre'] ?? '';

if (!empty($q)) {
    buscarReceta($conexion, $q);
}
?>