<?php
include('conexion.php');

$nombre = $_POST["nombre"];

$nuevo_usuario=$mysqli -> query("select nombre from diciplina where nombre='$nombre'");
if(mysqli_num_rows($nuevo_usuario)>0)
{
echo "
<img src='logos/alerta.png'>
<br>
  <label> <b><h1>¡La diciplina YA EXISTE!</h1></b> </label>
<p class='avisos'><a href='javascript:history.go(-1)' class='clase1'>Volver a intentar</a></p>
";
}
else
{
$result = $mysqli -> query("insert into diciplina (id_diciplina, nombre) values (NULL,'$nombre')"); 
header('Location: c_t_diciplinas.php');
} 
?>