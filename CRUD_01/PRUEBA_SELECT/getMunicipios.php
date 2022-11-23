<?php
//header('Content-Type: application/json');
require "pdo.php";
$sql="SELECT muni_id,muni_nombre FROM municipios ORDER BY muni_id";
$stmt = $pdo-> prepare($sql);
$stmt -> execute();
$municipios_result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//print_r($municipios_result);
echo '<option value="0">Seleccionar</option>';
foreach ($municipios_result as $row){
	echo '<option value="'.$row["muni_id"].'">'.$row["muni_nombre"].'</option>';
}
?>