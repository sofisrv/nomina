<?php
require_once('crud_ed.php');
require_once('clase_ed.php');
$crud=new CrudEd();
$diciplinas= new Ed();
$listaDiciplinas=$crud->mostrardiciplinas($_GET['id_entrenador']);
$id_entrenador=$_GET['id_entrenador'];    
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head><meta charset="euc-jp">
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Entrenador/diciplina</title>
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
 <a href="n_ed.php?id_entrenador=<?php echo $id_entrenador?>&accion=a'"><button class="btn">Nueva</button></a>
<?php
  $query = $mysqli -> query ("SELECT * FROM entrenador WHERE id_entrenador= $id_entrenador");
  while ($valores = mysqli_fetch_array($query)) {
    $n=$valores['nombre'];
  }
?>
  <label> Diciplinas de <b><?php echo $n?> </b> </label>
<input type="text" id="filtro1" onkeyup="myFunction()" placeholder="Buscar diciplina" title="Escribe diciplina">
</div>
  <table id="myTable">
        <tr id="t1" class="w3-teal">
          <th style="width:30%;"><h2>Diciplina</h2></th>
          <th style="width:20%;"><h4>Numero de alumnos</h4></th>
          <th style="width:20%;"><h4>Costo al alumno</h4></th>
          <th style="width:20%;"><h4>Pago al maestro</h4></th>
          <th style="width:10%;"><h4>Editar</h4></th>
        </tr>
        <tbody>
          <?php foreach ($listaDiciplinas as $diciplinas) {
                  $id_diciplina= $diciplinas->getid_diciplina();
                  $query = $mysqli -> query ("SELECT * FROM diciplina WHERE id_diciplina= $id_diciplina");
                  while ($valores = mysqli_fetch_array($query)) {
                    $nombred=$valores['nombre'];
                  }
                  $id_ed= $diciplinas->getid_ed();
                  $na= $diciplinas->getna();
                  $c_alumno= $diciplinas->getc_alumno();
                  $c_e= $diciplinas->getc_e();
            ?>
            <tr>
                <td><b><?php echo $nombred?></b></td>
                <td><b><?php echo $na?> alumnos </b></td>
                <td><b>$<?php echo $c_alumno?></b></td>
                <td><b>$<?php echo $c_e?></b></td>
                <td><a ><button title="Editar" ><img src="logos/Editar.jpg"  class="ver1" OnClick="location.href='m_ed.php?id_ed=<?php echo $diciplinas->getid_ed()?>&accion=a'">
                </a></td>
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