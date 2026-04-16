<?php
function conexionDB()
{
    $nameDB = "ESDLC";
    $username = "root";
    $password = "1234";
    $conn = null;

    try {
        $conn = new PDO("mysql:host=db;dbname=$nameDB;charset=utf8mb4", $username, $password);
        return $conn;
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}

function buscarReceta($conexion, $nombre)
{
    try {
        $sql = "SELECT * FROM recetas WHERE nombre = ?";
        $declaracion = $conexion->prepare($sql);
        $declaracion->execute([$nombre]);
        return $declaracion;
    } catch (PDOException $e) {
        echo "Error" . $e->getMessage();
    }
}

function parsearImagenes($texto) {

    // separar por coma
    preg_match_all('/"([^"]+)"/', $texto, $matches);

    return $matches[1];
}

$q = $_POST['busqueda'] ?? '';

/* Comprobamos que no esté vacía la variable y buscamos la receta */
if (!empty($q)) {
    $conexion = conexionDB();
    $resultado = buscarReceta($conexion, $q);
}

?>

