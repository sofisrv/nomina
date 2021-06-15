<?php
include('conexion.php');

$id_entrenador = $_POST["id_entrenador"];
$id_diciplina = $_POST["id_diciplina"];
$na = $_POST["na"];
$c_alumno = $_POST["c_alumno"];
$c_e = $_POST["c_e"];
	
	$result = $mysqli -> query("insert into entrenador_diciplina (id_ed, id_entrenador, id_diciplina, na, c_alumno, c_e) values (NULL,'$id_entrenador','$id_diciplina','$na','$c_alumno','$c_e')"); 
        header('Location: c_t_diciplinas.php');
	
	
	
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
						<h3>Grupo guardado</h3>
						<?php
						header('Location: c_t_diciplinas.php');
						?>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
						<a href="c_t_diciplinas.php" class="btn btn-primary">Regresar</a>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</body>
</html>
