<style>
html,body{
  height: 100%;
  width: 100%;
  font-family: 'Josefin Sans', sans-serif;

}
* {
  box-sizing: border-box;
}
.bg-img {
  background-image: url("logos/gym.jpg");
  height: 100%;
  background-position: center;
  background-repeat: repeat-x;
  background-size: cover;
  position: relative;
}
a{

  text-decoration:none
}
.header{
  position:fixed;
  overflow:hidden;
  display:flex;
  flex-wrap: wrap;
  width: 100%;
  color:#eee;
  background-color: black;
}
.header a{
  color:#eee;
}
.boton{
  border:2px solid #fff;
  border-radius:3px;
  text-decoration:none;
  display:inline-flex;
  align-items:center;
  align-content:center;
  font-weight: 900;
  font-size:1.1em;
  line-height:1;
  box-sizing:border-box;
  padding: 10px;
}
.sides{
  display:inline-flex;
  align-items:center;
  align-content:center;
  margin: 5px;
  margin-left: 5%;
  margin-right: 5%;
}
.sides1{
margin-left: 5%;
  margin: 5px;
  float: right;
}
.author{
  margin-left: 5%;
  display:inline-block;
  width:60px;
  height:60px;
  border-radius:50%;
  background:url("logos/lp1.png") center no-repeat;
  background-size:cover;
  border:2px solid #fff;
  border-radius:3px;
  border-radius: 60px;
}

</style>
    <div class="header">
  <div class="sides">
     <a href="c_t_entrenadores.php" class="boton">Entrenadores</a>
     <a href="c_t_diciplinas.php" class="boton">Diciplinas</a>
     <a href="t_clases.php" class="boton">Clases</a>
     <a href="n_reporte.php" class="boton">Nomina</a>
     <a href="t_usuarios.php" class="boton">Usuarios</a>
  </div>

  <div class="sides1" align="right"> 
    <a href="cerrarsesionc.php" class="author"></a>
     <a><?php echo $_SESSION['username'];?></a>
  </div>
</div>