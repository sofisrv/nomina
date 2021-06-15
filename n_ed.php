<?php
include("conexion.php");
  $sql = "SELECT * FROM diciplinas";
  $result = $mysqli->query($sql);
  $id_entrenador=$_GET['id_entrenador'];    
?>
<!DOCTYPE html>
<html>
  <head><meta charset="gb18030">
  <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
    <title>Nuevo Entrenador diciplina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>
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
  include("conexion.php");
  $query = $mysqli -> query ("SELECT * FROM entrenador WHERE id_entrenador= $id_entrenador");
  while ($valores = mysqli_fetch_array($query)) {
    $n=$valores['nombre'];
  }
  ?>

  <form class="container" action="g_ed.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <label for="id_entrenador" class="col-sm-2 control-label"></label>
          <div class="col-sm-10">
          <input type='hidden' id="id_entrenador" name='id_entrenador' value="<?php echo $id_entrenador ?>" />
          </div>
          <label><b>Agregar diciplina para profesor: <?php echo $n ?></label>
            <br>
            <br>
            <br>
          <label for="id_diciplina" class="col-sm-2 control-label">Diciplina</label>
          <div class="col-sm-10">
              <select name='id_diciplina' id="id_diciplina">
                <option value="0">Seleccione una diciplina:</option>
                <?php
                  $query = $mysqli -> query ("SELECT * FROM diciplina");
                  while ($valores = mysqli_fetch_array($query)) {
                    $nd=$valores[nombre];
                    $id=$valores[id_diciplina];
                    echo '<option value="'.$id.'">'.$nd.'</option>';
                  }
                ?>
              </select>
          </div>
        </div>
        
        <div class="form-group">
          <label for="na" class="col-sm-2 control-label">Numero de alumnos</label>
          <div class="col-sm-10">
            <input type="number"list="defaultNumbers" class="form-control" id="na" name="na" placeholder="Seleccione de la lista # Alumnos" required>
            <datalist id="defaultNumbers">
              <option value="1">
              <option value="2">
              <option value="3">
              <option value="4">
            </datalist>
          </div>
        </div>
        <div class="form-group">
          <label for="c_alumno" class="col-sm-2 control-label">Costo al publico (pesos MXN)</label>
          <div class="col-sm-10">
            <input type="number" min="0" class="form-control" id="c_alumno" name="c_alumno" placeholder="Costo alumnos" required>
          </div>
          </div>
        <div class="form-group">
          <label for="c_e" class="col-sm-2 control-label">Pago profesor (pesos MXN)</label>
          <div class="col-sm-10">
            <input type="number" min="0" class="form-control" id="c_e" name="c_e" placeholder="Pago profesor" required>
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