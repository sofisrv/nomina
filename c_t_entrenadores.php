<?php
require_once('crud_entrenador.php');
require_once('clase_entrenador.php');
$crud=new CrudEntrenador();
$entrenadores= new Entrenador();
$listaentrenadores=$crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head><meta charset="gb18030">
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Entrenadores</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<style>
html,body{
  height:100%;
  width: auto;
  font-family: 'Josefin Sans', sans-serif;

}
* {
  box-sizing: border-box;
}
.ver1{
  display:inline-block;
  width: 100%;
  height: auto;
  border-radius:10%;
  background:center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px ;
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
<br>
<div class="filtros">
  <a href="n_entrenador.php"><button class="btn">Nuevo</button></a>
<input type="text" id="filtro1" onkeyup="myFunction()" placeholder="Buscar Entrenador..." title="Buscar entrenador">
</div>
  <table id="myTable">
        <tr id="t1" class="w3-teal">
          <th style="width:20%;"><h2>Entrenador</h2></th>
          <th style="width:20%;"><h4>Referencia</h4></th>
          <th style="width:20%;"><h4>Correo</h4></th>
          <th style="width:10%;"><h4>Editar entrenador</h4></th>
          <th style="width:10%;"><h4>Ver costos</h4></th>
          <th style="width:10%;"><h4>Ver clases</h4></th>
          <th style="width:10%;"><h4>Agregar Clase</h4></th>
        </tr>
        <tbody>
          <?php foreach ($listaentrenadores as $entrenadores) {?>
            <?php 
                  $id_entrenador= $entrenadores->getid_entrenador(); 
                  $nombre= $entrenadores->getnombre(); 
                  $correo= $entrenadores->getcorreo(); 
            ?>
              <tr>
                <td><b><?php echo $nombre?></b></td>
                <td><b><?php echo $id_entrenador?></td>
                <td><?php echo $correo?></td>
                
                <td><a ><button title="Editar" ><img src="logos/editar.jpg"  class="ver1" OnClick="location.href='m_entrenador.php?id_entrenador=<?php echo $entrenadores->getid_entrenador()?>&accion=a'">
                </a></td>
                <td><a ><button title="VER COSTOS" ><img src="logos/costo.jpg"  class="ver1" OnClick="location.href='c_t_entrenadoresdiciplina.php?id_entrenador=<?php echo  $entrenadores->getid_entrenador()?>'"></a></td>
                <td><a ><button title="VER CLASES" ><img src="logos/lista.jpg"  class="ver1" OnClick="location.href='t_clases_e.php?id_entrenador=<?php echo  $entrenadores->getid_entrenador()?>'"></a></td>
                <td><a ><button title="Agregar Clase" ><img src="logos/mas.jpg"  class="ver1" OnClick="location.href='n_clase.php?id_entrenador=<?php echo $entrenadores->getid_entrenador()?>&accion=a'">
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