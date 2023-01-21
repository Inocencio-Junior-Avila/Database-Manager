<?php
include('cargar.php');
$tabla = $_GET['tabla'];
$db = $_GET['db'];


plantilla::aplicar($db.'Tabla '.$tabla);

$con = conexion::get_con();
mysqli_select_db($con, $db);
$sql = "select * from $tabla limit 10;";
$rs = mysqli_query($con, $sql);

$data = [];

while($row = mysqli_fetch_object($rs)){
    $data[]= $row;
}


echo mostrar_tabla($data);
?>