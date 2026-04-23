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
        $sql = "SELECT *
                FROM recetas
                WHERE MATCH(nombre) AGAINST(?) > 0.1
                LIMIT 20";

        $stmt = $conexion->prepare($sql);
        $stmt->execute([$nombre, $nombre]);

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultados as &$receta) {
            $receta['similitud'] = similitudTexto($nombre, $receta['nombre']);
        }

        usort($resultados, function ($a, $b) {
            $scoreA = $a['puntuacion'] + $a['similitud'];
            $scoreB = $b['puntuacion'] + $b['similitud'];
            return $scoreB <=> $scoreA;
        });

        return array_slice($resultados, 0, 10);

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function similitudTexto($a, $b)
{
    $a = mb_strtolower(trim($a));
    $b = mb_strtolower(trim($b));

    if ($a === $b) {
        return 1.0;
    }

    $maxLen = max(strlen($a), strlen($b));

    if ($maxLen === 0) {
        return 1.0;
    }

    $distancia = levenshtein($a, $b);

    $similitud = 1 - ($distancia / $maxLen);

    return max(0, min(1, $similitud));
}

function parsearImagenes($texto)
{
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