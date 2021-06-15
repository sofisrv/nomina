<?php
  require 'conexion.php';
  
  $id_ed = $_GET['id_ed'];
  
  $sql = "SELECT * FROM entrenador_diciplina WHERE id_ed = '$id_ed'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  $id_diciplina=$row['id_diciplina'];
  $id_entrenador=$row['id_entrenador']
?>

<!DOCTYPE html>
<html>
<head>
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Modificar Entrenador/diciplina</title>
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
<form class="container" method="POST" action="mod_ed.php" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" id="id_ed" name="id_ed" value="<?php echo $row['id_ed']; ?>" />
        <input type="hidden" id="id_entrenador" name="id_entrenador" value="<?php echo $id_entrenador;?>" />
        <input type="hidden" id="id_diciplina" name="id_diciplina" value="<?php echo $id_diciplina;?>" />
        <?php
                  $query = $mysqli -> query ("SELECT * FROM entrenador where id_entrenador = $id_entrenador");
                  while ($valores = mysqli_fetch_array($query)) {
                    $i_e=$valores[nombre];
        } ?>
        <?php
                  $query = $mysqli -> query ("SELECT * FROM diciplina where id_diciplina = $id_diciplina");
                  while ($valores = mysqli_fetch_array($query)) {
                    $i_d=$valores[nombre];
        } ?>
        <label><b>Modificar precios para profesor: <?php echo $i_e ?></label>
        <label><b>Diciplina: <?php echo $i_d ?></label>
        <div class="form-group">
          <label for="na" class="col-sm-2 control-label">Numero de alumnos</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['na']; ?>" type="number"list="defaultNumbers" class="form-control" id="na" name="na" placeholder="Seleccione de la lista # Alumnos" required>
            <datalist id="defaultNumbers">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
            </datalist>
          </div>
        </div>
        <div class="form-group">
          <label value="<?php echo $row['c_alumno']; ?>"for="c_alumno" class="col-sm-2 control-label">Costo al publico (pesos MXN)</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['c_alumno']; ?>" type="number" min="0" class="form-control" id="c_alumno" name="c_alumno" placeholder="Costo alumnos" required>
          </div>
          </div>
        <div class="form-group">
          <label  for="c_e" class="col-sm-2 control-label">Pago profesor (pesos MXN)</label>
          <div class="col-sm-10">
            <input value="<?php echo $row['c_e']; ?>" type="number" min="0" class="form-control" id="c_e" name="c_e" placeholder="Pago profesor" required>
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