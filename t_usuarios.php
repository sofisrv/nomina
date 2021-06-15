<?php
require_once('crud_usuario.php');
require_once('clase_usuario.php');
$crud=new CrudUsuario();
$usuarios= new Usuario();
$listausuarios=$crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head><meta charset="euc-jp">
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Usuarios</title>
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

<a href="n_usuario.php"><button class="btn">Nuevo</button></a>
<input type="text" id="filtro1" onkeyup="myFunction()" placeholder="Buscar Usuario..." title="Escribe Nombre de usuario">
</div>
  <table id="myTable">
        <tr id="t1" class="w3-teal">
          <th style="width:45%;"><h2>Nombre</h2></th>
          <th style="width:45%;"><h4>Contraseña</h4></th>
          <th style="width:10%;"></th>
        </tr>
        <tbody>
          <?php foreach ($listausuarios as $usuarios) {?>
            <?php 
                  $id_usuario= $usuarios->getid_usuario();
                  $nombre= $usuarios->getnombre();
            ?>
            <tr>
                <td><b><?php echo $nombre?></b></td>
                <td><?php echo "*******************"?></td>
                <td><a ><button title="Editar" ><img src="logos/edit.png"  class="ver1" OnClick="location.href='m_usuario.php?id_usuario=<?php echo $usuarios->getid_usuario()?>&accion=a'">
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