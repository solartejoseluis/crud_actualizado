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
        echo json_encode($sql);
        break;

        try {
            $sql = "INSERT INTO articulos(descripcion,precio) VALUES ('$_POST[descripcion]',$_POST[precio])";
            $response = $conn->exec($sql);
            echo json_encode($response);
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }

    // case 'borrar':
    //     $respuesta = mysqli_query($conexion, "DELETE FROM articulos where codigo=$_GET[codigo]");
    //     echo json_encode($respuesta);
    //     break;

    // case 'consultar':
    //     $datos = mysqli_query($conexion, "select codigo,descripcion,precio from articulos where codigo=$_GET[codigo]");
    //     $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    //     echo json_encode($resultado);
    //     break;

    // case 'modificar':
    //     $respuesta = mysqli_query($conexion, "update articulos set
    //     descripcion='$_POST[descripcion]',
    //     precio=$_POST[precio]
    //     where codigo=$_GET[codigo]");
    //     echo json_encode($respuesta);
    //     break;
}
?>
