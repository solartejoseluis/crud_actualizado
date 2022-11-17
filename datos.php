<?php
header('Content-Type: application/json');
require "pdo.php";
//$conexion = $conn();

switch ($_GET['accion']) {
    case 'listar':
        $sql = "SELECT codigo,descripcion,precio FROM articulos";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute();
        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;


    // case 'listar':
    //     $sql = "SELECT codigo,descripcion,precio FROM articulos";
    //     $stmt = $pdo -> prepare($sql);
    //     $stmt -> execute();
        
    //     $result = $stmt -> fetchAll(PDO::FETCH_FUNC, fn($codigo, $descripcion, $precio) => [$codigo, $descripcion, $precio]);
        
    //     echo json_encode(["data" => $result]);
    //     break;

/*     case 'agregar':
        $sql = ($conexion, "INSERT INTO articulos(descripcion,precio) VALUES ('$_POST[descripcion]',$_POST[precio])");
        echo json_encode($sql);
        break;

    case 'borrar':
        $respuesta = mysqli_query($conexion, "delete from articulos where codigo=$_GET[codigo]");
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $datos = mysqli_query($conexion, "select codigo,descripcion,precio from articulos where codigo=$_GET[codigo]");
        $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
        echo json_encode($resultado);
        break;

    case 'modificar':
        $respuesta = mysqli_query($conexion, "update articulos set
        descripcion='$_POST[descripcion]',
        precio=$_POST[precio]
        where codigo=$_GET[codigo]");
        echo json_encode($respuesta);
        break; */
}
?>
