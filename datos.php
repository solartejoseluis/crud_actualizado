<?php
header('Content-Type: application/json');
require "pdo.php";

switch ($_GET['accion']) {
    case 'listar':
        $sql = "SELECT codigo,descripcion,precio FROM articulos";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;

     case 'agregar':
            $sql = "INSERT INTO articulos(descripcion,precio) VALUES ('$_POST[descripcion]',$_POST[precio])";
            $response = $pdo->exec($sql);
            echo json_encode($response);
            break;

    case 'borrar':
         $sql = "DELETE FROM articulos where codigo=$_GET[codigo]";
         echo json_encode($sql);
         break;

    case 'consultar':
        $sql = "SELECT codigo,descripcion,precio FROM articulos WHERE codigo=$_GET[codigo]";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;

    case 'modificar':
         $sql = "UPDATE articulos SET
         descripcion='$_POST[descripcion]',
         precio=$_POST[precio]
         WHERE codigo=$_GET[codigo]";
         echo json_encode($sql);
         break;
}
?>
