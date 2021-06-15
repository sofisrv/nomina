<?php
  require 'conexion.php';
  require_once('crud_entrenador.php');
require_once('clase_entrenador.php');
$crud=new CrudEntrenador();
$entrenadores= new Entrenador();
$listaentrenadores=$crud->mostrar();
?>

<!DOCTYPE html>
<html>
<head>
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Generar reporte</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<style>

html,body{
  height:120%;
  width: 100%;
  font-family: 'Josefin Sans', sans-serif;
  background-image: url("logos/gym.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
* {
  box-sizing: border-box;
}
.container {
  position: absolute;
  right: 0;
  width: 1000px;
  padding: 16px;
  background-color: white;
  margin-top: 10%;
  margin-right: 150px;
}

input {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input:focus {
  background-color: #ddd;
  outline: none;
}
select{
   width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1; 
}
select :focus{
    background-color: #ddd;
  outline: none;
}
</style>
<body>
  <?php
  include("barramenu.php");
  ?>
<form action='reporte.php' method='post' class="container" autocomplete="off">
    <table>
          <label for="id_entrenador" class="col-sm-2 control-label">Entrenador</label>
          <div class="col-sm-10">
              <select name='id_entrenador' id="id_entrenador">
                <option value="0" required>Seleccione:</option>
                <?php
                  $query = $mysqli -> query ("SELECT * FROM entrenador ORDER BY nombre ASC ;");
                  while ($valores = mysqli_fetch_array($query)) {
                    $np=$valores['nombre'];
                    echo '<option value="'.$valores[id_entrenador].'">'.$np.'</option>';
                  }
                ?>
              </select>
          </div>
          <br>
          <label>Fecha de Inicio</label>
          <input type='date' name='fi' required >
          <br>  
          <label>Fecha de Fin</label>
          <input type='date' name='ff' required >
          <br>
          <button type="submit" class="btn">Consultar</button>
    </table>
  </form>
    </div>
  </body>
</html>