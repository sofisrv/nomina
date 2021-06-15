<?php
require_once('crud_diciplina.php');
require_once('clase_diciplina.php');
$crud=new CrudDiciplina();
$diciplinas= new Diciplina();
$listadiciplinas=$crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head><meta charset="gb18030">
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Diciplinas</title>
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
  <a href="n_diciplina.php"><button class="btn">Nueva</button></a>
<input type="text" id="filtro1" onkeyup="myFunction()" placeholder="Buscar Diciplina..." title="Buscar diciplina">
</div>
  <table id="myTable">
        <tr id="t1" class="w3-teal">
          <th style="width:45%;"><h2>Diciplina</h2></th>
          <th style="width:45%;"><h4>Referencia</h4></th>
          <th style="width:10%;"><h4>Editar diciplina</h4></th>
        </tr>
        <tbody>
          <?php foreach ($listadiciplinas as $diciplinas) {?>
            <?php 
                  $id_diciplina= $diciplinas->getid_diciplina(); 
                  $nombre= $diciplinas->getnombre(); 
            ?>
              <tr>
                <td><b><?php echo $nombre?></b></td>
                <td><b><?php echo $id_diciplina?></td>
                <td><a ><button title="Editar" ><img src="logos/edit.png"  class="ver1" OnClick="location.href='m_diciplina.php?id_diciplina=<?php echo $diciplinas->getid_diciplina()?>&accion=a'">
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