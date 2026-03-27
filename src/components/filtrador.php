<section>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Buscar receta">
        <img src="" alt="">
        <input type="submit">
    </form>
</section>

<?php
$nameDB = "ESDLC";
$username = "root";
$password = "1234";
$PDO = new PDO("mysql:host=db;dbname=$nameDB", $username, $password);

try {
    echo "Conexión con la base de datos correcta";
} catch (PDOException $e) {
    echo "ERROR: ". $e->getMessage();
}


/* if ($_POST["nombre"]) {
    $nombre = $_POST["nombre"];
    echo "Nombre de receta: ".$nombre;
} */
?>