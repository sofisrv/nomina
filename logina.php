<!DOCTYPE html>
<html>
<head>
<title>Inicia sesión</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<style>
body, html {
  height: 100%;
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

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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

.btn:hover {
  opacity: 5;
}
.logo{
    position: relative;
    left: 30%;
    border-radius: 60px;
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
</style>
    <link  rel="icon" href="logos/logogym.jpg" type="image/png"/>
</head>
<body>
<div class="bg-img">
  <div class="container">
  <form action="inia.php" method="POST" autocomplete="off">
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
</form>
</body>
</html>