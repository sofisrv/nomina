<?php
require_once('conectar.php');
 
	class CrudEntrenador{
		public function __construct(){}
		public function mostrar(){
			$db=Db::conectar();
			$listaEntrenadores=[];
			$select=$db->query('SELECT * FROM entrenador ORDER BY nombre ASC;');

		foreach($select->fetchAll() as $entrenador){
			$myEntrenador= new Entrenador();
			$myEntrenador->setid_entrenador($entrenador['id_entrenador']);
			$myEntrenador->setnombre($entrenador['nombre']);
			$myEntrenador->setcorreo($entrenador['correo']);
			$myEntrenador->setcontra($entrenador['contra']);
			$listaEntrenadores[]=$myEntrenador;
		}
		return $listaEntrenadores;
	}
		public function eliminar($id_entrenador){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM entrenador WHERE id_entrenador=:id_entrenador');
			$eliminar->bindValue('id_entrenador',$id_entrenador);
			$eliminar->execute();
		}
}
?>