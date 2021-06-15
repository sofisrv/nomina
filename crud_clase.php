<?php
require_once('conectar.php');
	class CrudClase{
		public function __construct(){}
		public function mostrar(){
			$db=Db::conectar();
			$listaClases=[];
			$select=$db->query('SELECT * FROM clase ORDER BY fecha ASC;');

		foreach($select->fetchAll() as $clase){
			$myClase= new Clase();
			$myClase->setid_clase($clase['id_clase']);
			$myClase->setid_ed($clase['id_ed']);
			$myClase->setfecha($clase['fecha']);
			$myClase->sethora($clase['hora']);
			$myClase->setid_entrenador($clase['id_entrenador']);
			$myClase->setnal($clase['nal']);
			$listaClases[]=$myClase;
		}
		return $listaClases;
	}
		public function mostrare($id_entrenador){
			$db=Db::conectar();
			$listaClases=[];
			$select=$db->prepare('SELECT * FROM clase where id_entrenador=:id_entrenador ORDER BY fecha ASC;');
			$select->bindValue('id_entrenador',$id_entrenador);
            $select->execute();

		foreach($select->fetchAll() as $clase){
			$myClase= new Clase();
			$myClase->setid_clase($clase['id_clase']);
			$myClase->setid_ed($clase['id_ed']);
			$myClase->setfecha($clase['fecha']);
			$myClase->sethora($clase['hora']);
			$myClase->setid_entrenador($clase['id_entrenador']);
			$myClase->setnal($clase['nal']);
			$listaClases[]=$myClase;
		}
		return $listaClases;
	}
		public function reporte($id_entrenador, $fi, $ff){
			$db=Db::conectar();
			$listaClases=[];
			$select=$db->prepare('SELECT * FROM clase where id_entrenador=:id_entrenador ORDER BY fecha ASC;');
			$select->bindValue('id_entrenador',$id_entrenador);
            $select->execute();

		foreach($select->fetchAll() as $clase){
			$myClase= new Clase();
			$myClase->setid_clase($clase['id_clase']);
			$myClase->setid_ed($clase['id_ed']);
			$myClase->setfecha($clase['fecha']);
			$myClase->sethora($clase['hora']);
			$myClase->setid_entrenador($clase['id_entrenador']);
			$myClase->setnal($clase['nal']);
			$listaClases[]=$myClase;
		}
		return $listaClases;
	}
}
?>