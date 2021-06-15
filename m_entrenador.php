<?php
  require 'conexion.php';
  
  $id_entrenador = $_GET['id_entrenador'];
  
  $sql = "SELECT * FROM entrenador WHERE id_entrenador = '$id_entrenador'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  
?>

<!DOCTYPE html>
<html>
<head>
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Modificar Usuario</title>
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
<form class="container" method="POST" action="mod_entrenador.php" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" id="id_entrenador" name="id_entrenador" value="<?php echo $row['id_entrenador']; ?>" />

        <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
          </div>
        </div>

         <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Correo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>"  required>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="contra" name="contra" placeholder="Contraseña" value="<?php echo $row['contra']; ?>"  required>
          </div>
        </div>
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>