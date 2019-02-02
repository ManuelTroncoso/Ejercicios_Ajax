<?php
$c = new Mysqli("localhost", "root", "", "noticias");
$texto = $_POST['texto'];
$c->query("INSERT noticia (texto) VALUES ('$texto')");
echo "ok";
?>