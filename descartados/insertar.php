<?php
//creado el  2022-11-16
// definición de variables

echo "PRUEBA DE INSERCION POR PDO ";

$dsn="mysql:host=localhost;port=3306;dbname=tutorialesya";
$username="kiron";
$password="123456";
$options= array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
//bloque trycatch
try {
    //definir la conexion
    $pdo = new PDO($dsn,$username,$password,$options);
    //asignar el modo de error PDO a la excepcion
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Connected Succesfully";
	$sql="INSERT INTO articulos(descripcion,precio) VALUES ('camisa',70000)";
	$pdo->exec($sql);
	echo "insercion realizada";
} catch (PDOException $e) {
    //mensaje de fallo
    echo "Connection failed: ". $e->getMessage();
    die();
}

?>