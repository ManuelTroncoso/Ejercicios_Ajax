<?php

$conexion  = new mysqli("localhost", 'root', "", "noticias");
$conexion->query("SET NAMES utf8");
$resultado = $conexion->query("Select texto from noticia order by momento desc limit 1");
if($resultado->num_rows == 1){
    $fila = $resultado->fetch_assoc();
    echo $fila["texto"];
}
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$conexion->close();
?>

