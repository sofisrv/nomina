<!DOCTYPE html>
<html>
<head><meta charset="gb18030">
      <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Cursos</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
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

<body oncontextmenu="return false" onkeydown="return false">

<div class="bg-img">
<?php
  include("barramenu.php");
?>
    </div>
</body>
</html>