<?php
// prueba de conexion para verificar si funciona el query de pdo

// include connection
require 'pdo.php';

// prepare query
$statement = $pdo->prepare("SELECT * FROM articulos");
$statement->execute();

// print results
while ($result = $statement->fetch()) {
    echo $result->descripcion . '<br>';
}

// este query funciona adecuadamente