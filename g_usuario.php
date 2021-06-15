<?php
include('conexion.php');

$nombre = $_POST["nombre"];
$contra = $_POST["contra"];

$nuevo_usuario=$mysqli -> query("select nombre from usuario where nombre='$nombre'");
if(mysqli_num_rows($nuevo_usuario)>0)
{
echo "
<img src='logos/alerta.png'>
<br>
  <label> <b><h1>¡El usuario YA EXISTE!</h1></b> </label>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver a intentar</a></p>
";
}
else
{
$result = $mysqli -> query("insert into usuario (id_usuario, nombre, contra) values (NULL,'$nombre','$contra')"); 
header('Location: t_usuarios.php');
} 
?>