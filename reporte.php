<?php
include("conexion.php");
require_once('crud_clase.php');
require_once('clase_clase.php');
$crud=new CrudClase();
$clases= new Clase();
$id_ent = $_POST['id_entrenador'];
$fi = $_POST['fi'];
$ff = $_POST['ff'];
$listaclases=$crud->mostrare($id_ent);
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
$sql = "SELECT c_alumno FROM entrenador_diciplina";

$consulta = sqlsrv_query($conn, $sql);
$suma = 0;
while($datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_NUMERIC))
{
     print_r($datos);
     $suma += $datos['c_alumno'];
}


?>
<!DOCTYPE html>
<html>
<head><meta charset="euc-jp">
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Clases</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<style>

html,body{
    height:120%;
  width: 100%;
  font-family: 'Josefin Sans', sans-serif;

}
* {
  box-sizing: border-box;
}
</style>
<body>
  <?php
  include("barramenu.php");
  ?>

<br>
<br>
<br>
<br>
<br>
<div class="filtros">
<?php
  $query = $mysqli -> query ("SELECT * FROM entrenador WHERE id_entrenador= $id_ent");
  while ($valores = mysqli_fetch_array($query)) {
    $n=$valores['nombre'];
  }
?>
  <label> Clases de <b><?php echo $n?> </b> </label>
  <br>
  <label> Entre <b><?php echo $fi?> </b> </label>
  <br>
  <label> Y <b><?php echo $ff?> </b> </label>
  <br>
  <label> TOTAL:<b><?php echo $ff?> </b> </label>
  <br>
<input type="text" id="filtro1" onkeyup="myFunction()" placeholder="Buscar Profesor..." title="Escribe Nombre de profesor">
</div>
  <table id="myTable">
        <tr id="t1" class="w3-teal">
          <th style="width:30%;"><h4>Alumno Titular</h4></th>
          <th style="width:10%;"><h4>Diciplina</h4></th>
          <th style="width:10%;"><h4>Fecha</h4></th>
          <th style="width:10%;"><h4>Hora</h4></th>
          <th style="width:10%;"><h4>Numero de alumnos</h4></th>
          <th style="width:10%;"><h4>Costo Clase</h4></th>
          <th style="width:10%;"><h4>Pago Profesor</h4></th>
        </tr>
        <tbody>
          <?php foreach ($listaclases as $clases) {?>
            <?php 
                  $id_clase= $clases->getid_clase(); 
                  $id_ed= $clases->getid_ed(); 
                  $fecha= $clases->getfecha(); 
                  $hora= $clases->gethora(); 
                  $nal= $clases->getnal(); 
                  $ide= $clases->getid_entrenador(); 
              include("conexion.php");
              $query = $mysqli -> query ("SELECT * FROM entrenador_diciplina WHERE id_ed= $id_ed");
              while ($valores = mysqli_fetch_array($query)) {
                $id_e=$valores['id_entrenador'];
                $id_d=$valores['id_diciplina'];
                $na=$valores['na'];
                $c_alumno=$valores['c_alumno'];
                $c_e=$valores['c_e'];
              }
              $query = $mysqli -> query ("SELECT * FROM entrenador WHERE id_entrenador= $ide");
              while ($valores = mysqli_fetch_array($query)) {
                $n_e=$valores['nombre'];
              }
              $query = $mysqli -> query ("SELECT * FROM diciplina WHERE id_diciplina= $id_d");
              while ($valores = mysqli_fetch_array($query)) {
                $n_d=$valores['nombre'];
              }
            ?>
              <tr>
                <td><b><?php echo $nal?></b></td>
                <td><?php echo $n_d?></td>
                <td><?php echo $fecha?></td>
                <td><?php echo $hora?></td>
                <td><?php echo $na?></td>
                <td>$<?php echo $c_alumno?></td>
                <td>$<?php echo $c_e?></td>
              </tr>
              <?php }?>
            </tbody>
        </tbody>
        </table>
      </div>
    </div>
</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filtro1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>