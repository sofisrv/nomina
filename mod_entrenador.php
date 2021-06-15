<?php
include('conexion.php');
$id_entrenador = $_POST["id_entrenador"];
$nombre = $_POST["nombre"];
$contra = $_POST["contra"];
$correo = $_POST["correo"];

	$sql = "UPDATE entrenador SET id_entrenador='$id_entrenador', nombre='$nombre',correo='$correo', contra='$contra' WHERE id_entrenador = '$id_entrenador'";
	$resultado = $mysqli->query($sql);
	$id_insert = $id_entrenador;
?>

<html lang="es">
	<head>
		    <link  rel="icon" href="logos/logocen.png" type="image/png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>Entrenador guardado</h3>
						<?php
						header('Location: c_t_entrenadores.php');
						?>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
						<a href="t_usuarios.php" class="btn btn-primary">Regresar</a>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</body>
</html>