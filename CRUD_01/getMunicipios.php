<?php
header('Content-Type: application/json');
require "pdo.php";

$sql="SELECT muni_id,muni_nombre FROM municipios ORDER BY muni_nombre";
$stmt = $pdo-> prepare($sql);
$stmt -> execute();
$result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result);

?>