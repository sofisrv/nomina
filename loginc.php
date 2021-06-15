<!DOCTYPE html>
<html>
<head>
<link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
<title>Inicia sesión</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<style>
body, html {
  height: 100%;
  width: 100%;
  font-family: Arial, Helvetica, sans-serif;
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
.container {
  opacity:0.85;
  position: absolute;
  right: 0;
  margin: 40px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
  border-radius: 10px;
}

input[type=text], input[type=password], input[type=date],input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password], input[type=date], input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

.btn1 {
  background-color: teal;
  color: white;
  padding: 16px 20px;
  border-radius: 10px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.btn2 {
  background-color: #33B08E;
  color: white;
  padding: 16px 20px;
  border-radius: 10px;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 5;
}


.cancelbtn {
  width: auto;
  color: white;
  padding: 10px 18px;
  background-color: #f44336;
  border-radius: 10px;
}


.registrarbtn {
  width: 200px;
  height: 50px;
  padding: 10px 18px;
  color: white;
  background-color: #33B08E;
  border-radius: 10px;
}
/* Center the image and position the close button */

.container1 {
  padding: 16px;
  border-radius: 10px;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

}

/* Modal Content/Box */
.modal-content {
   border-radius: 10px;
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  border-radius: 10px;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}
.logo{
    position: relative;
    left: 30%;
    border-radius: 60px;
}
</style>
</head>
<body>
<div class="bg-img">
  <div class="container">
  <form action="inic.php" method="POST" autocomplete="off">
    <a href="index.php"><img src="logos/logogym.jpg" border="0" height=100 class="logo"></a>
    <h1>Login Entrenador</h1>
    <label><b>Usuario</b></label>
    <input type="text" placeholder="Ingrese su usuario" name="user" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese su contraseña" name="password" required>

    <button type="submit" class="btn1">Entrar</button>
  </form>
    <br>
  <a href="http://localhost:8080/nomina/index.php"><button class="btn2">Regresar</button></a>
  </div>
</div>


</body>
</html>