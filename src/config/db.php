<?php
function conexionDB()
{

    $nameDB = getenv('MYSQL_DATABASE');
    $username = 'root'; /* Cambiar antes de desplegar */
    $password = getenv('MYSQL_ROOT_PASSWORD');
    $conn = null;

    try {
        $conn = new PDO("mysql:host=db;dbname=$nameDB;charset=utf8mb4", $username, $password);
        return $conn;
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}

function buscarRecetas($conexion, $busqueda)
{
    try {
        $sql = "SELECT *, MATCH(nombre) AGAINST(?) AS relevancia
                FROM recetas
                WHERE MATCH(nombre) AGAINST(?)
                ORDER BY relevancia DESC
                LIMIT 20";

        $resultado = $conexion->prepare($sql);
        $resultado->execute([$busqueda, $busqueda]);
        
        return $resultado->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
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
    $recetas = buscarRecetas($conexion, $q);
}

?>