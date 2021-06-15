<?php
require_once('conectar.php');
 
	class CrudUsuario{
		public function __construct(){}
		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO usuario values(NULL, :nombre,:contra)');
			$insert->bindValue('nombre',$usuario->getnombre());
			$insert->bindValue('contra',$usuario->getcontra());
			$insert->execute();
		}
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuario=[];
			$select=$db->query('SELECT * FROM usuario ORDER BY nombre ASC;');

		foreach($select->fetchAll() as $usuario){
			$myUsuario= new Usuario();
			$myUsuario->setid_usuario($usuario['id_usuario']);
			$myUsuario->setnombre($usuario['nombre']);
			$myUsuario->setcontra($usuario['contra']);
			$listaUsuario[]=$myUsuario;
		}
		return $listaUsuario;
	    }
		public function obtenerUsuario($id_usuario){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE id_usuario=:id_usuario');
			$select->bindValue('id_usuario',$id_usuario);
			$select->execute();
			$usuario=$select->fetch();
			$myUsuario= new Usuario();
			$myUsuario->setid_usuario($usuario['id_usuario']);
			$myUsuario->setnombre($usuario['nombre']);
			$myUsuario->setcontra($usuario['contra']);
			return $myUsuario;
		}
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuario SET id_usuario=:id_usuario, nombre=:nombre, contra=:contra WHERE id_usuario=:id_usuario');
			$actualizar->bindValue('id_usuario',$usuario->getid_usuario());
			$actualizar->bindValue('nombre',$usuario->getnombre());
			$actualizar->bindValue('contra',$usuario->getcontra());
			$actualizar->execute();
		}
}
?>