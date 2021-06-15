
<?php
	
	require 'conexion.php';
	
	$id_diciplina = $_POST['id_diciplina'];
	$nombre = $_POST['nombre'];
	
	$sql = "UPDATE diciplina SET id_diciplina='$id_diciplina', nombre='$nombre' WHERE id_diciplina = '$id_diciplina'";
	$resultado = $mysqli->query($sql);
	$id_insert = $id_diciplina;
	
	
	
	
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
