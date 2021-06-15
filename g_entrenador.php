<?php
include('conexion.php');

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contra = $_POST["contra"];

$nuevo_usuario=$mysqli -> query("select nombre from entrenador where nombre='$nombre'");
if(mysqli_num_rows($nuevo_usuario)>0)
{
echo "
<img src='logos/alerta.png'>
<br>
  <label> <b><h1>¡El entrenador YA EXISTE!</h1></b> </label>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver a intentar</a></p>
";
}
else
{
$result = $mysqli -> query("insert into entrenador (id_entrenador, nombre, correo, contra) values (NULL,'$nombre','$correo','$contra')"); 
header('Location: c_t_entrenadores.php');
} 
?>