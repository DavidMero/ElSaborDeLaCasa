<?php
function conexionDB()
{
    $nameDB = "ESDLC";
    $username = "root";
    $password = "1234";
    $conn = null;

    try {
        $conn = new PDO("mysql:host=db;dbname=$nameDB;charset=utf8mb4", $username, $password);
        echo "Conexión con la base de datos correcta";
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
        while ($row = $declaracion->fetch(PDO::FETCH_NUM)) {
            for ($i = 0; $i < count($row); $i++) {
                echo "$row[$i] | ";
            }
        }
    } catch (PDOException $e) {
        echo "Error" . $e->getMessage();
    }
}
?>