<?php
include('conexion.php');

$id_ed = $_POST["id_ed"];
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
$id_entrenador = $_POST["id_entrenador"];
$nal = $_POST["nal"];

$result = $mysqli -> query("insert into clase (id_clase, id_ed, fecha, hora, id_entrenador, nal) values (NULL,'$id_ed','$fecha','$hora','$id_entrenador','$nal')");  
header('Location: t_clases.php');
?>