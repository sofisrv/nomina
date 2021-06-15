<?php
require_once('crud_usuario.php');
require_once('clase_usuario.php');
$crud= new Crud_Usuario();
$usuario= new Usuario();

if(isset($_POST['actualizar'])){
		$usuario->setid_usuario($_POST['id']);
		$usuario->setnombre($_POST['nombre']);
		$usuario->setcontra($_POST['contra']);
		$crud->actualizar($usuario);
		header('Location: t_usuarios.php');	

	}
	elseif($_GET['accion']=='a'){
		header('Location: m_usuario.php');
	}
?>