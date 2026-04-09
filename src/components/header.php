<header class="top-bar">
    <form action="">
        <input type="search" placeholder="Introducir receta">
        <input type="button" value="Filtro">
        <input type="button" value="ORdenar">
    </form>
</header>

<?php
include "config/db.php";

$q = $_POST['nombre'] ?? '';

/* Comprobamos que no esté vacía la variable y buscamos la receta */
if (!empty($q)) {
    $conexion = conexionDB();
    $resultado = buscarReceta($conexion, $q);
}
?>