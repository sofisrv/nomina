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
    <title>Nuevo Clase</title>
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

  <form class="container" action="g_clase.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <label for="id_entrenador" class="col-sm-2 control-label"></label>
          <div class="col-sm-10">
          <input type='hidden' id="id_entrenador" name='id_entrenador' value="<?php echo $id_entrenador ?>" />
          </div>
          <label><b>Agregar clase para profesor: <?php echo $n ?></label>
            <br>
            <br>
            <br>
          <label for="id_diciplina" class="col-sm-2 control-label">Diciplinas de entrenador</label>
          <div class="col-sm-10">
              <select name='id_diciplina' id="id_diciplina">
                <option value="0">Seleccione una diciplina:</option>
                <?php
                  $query = $mysqli -> query ("SELECT * FROM entrenador_diciplina WHERE id_entrenador = $id_entrenador");
                  while ($valores = mysqli_fetch_array($query)) {
                        $id_ed=$valores[id_ed];
                        $id_d=$valores[id_diciplina];
                        $na=$valores[na];
                        $query1 = $mysqli -> query ("SELECT * FROM diciplina WHERE id_diciplina = $id_d ORDER BY nombre");
                        while ($valores1 = mysqli_fetch_array($query1)) {
                        $id_di=$valores1[id_diciplina];
                        $nombre=$valores1[nombre];
                        $diciplina= $nombre." (".$na." personas)";
                        echo '<option value="'.$id_ed.'">'.$diciplina.'</option>';
                  }
                  }
                ?>
                
              </select>
          </div>
        </div>
        <div class="form-group">
          <label for="fecha" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-10">
            <input type="date"  class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
          </div>
          </div>
        <div class="form-group">
          <label for="hora" class="col-sm-2 control-label">Hora</label>
          <div class="col-sm-10">
            <input type="time"  class="form-control" id="hora" name="hora" placeholder="Hora" required>
          </div>
          <div class="form-group">
          <label for="nal" class="col-sm-2 control-label">Alumno Titular</label>
          <div class="col-sm-10">
            <input type="Text"  class="form-control" id="nal" name="nal" placeholder="Nombre alumno titular" required>
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