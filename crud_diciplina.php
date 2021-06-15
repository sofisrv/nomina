<?php
require_once('conectar.php');
 
	class CrudDiciplina{
		public function __construct(){}
		public function mostrar(){
			$db=Db::conectar();
			$listaDiciplinas=[];
			$select=$db->query('SELECT * FROM diciplina ORDER BY nombre ASC;');

		foreach($select->fetchAll() as $diciplina){
			$myDiciplina= new Diciplina();
			$myDiciplina->setid_diciplina($diciplina['id_diciplina']);
			$myDiciplina->setnombre($diciplina['nombre']);
			$listaDiciplinas[]=$myDiciplina;
		}
		return $listaDiciplinas;
	}
		public function eliminar($id_diciplina){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM diciplina WHERE id_diciplina=:id_diciplina');
			$eliminar->bindValue('id_diciplina',$id_diciplina);
			$eliminar->execute();
		}public function mostrardiciplinas($id_entrenador){
			$db=Db::conectar();
			$listaDiciplinas=[];
			$select=$db->prepare('SELECT * FROM entrenador_diciplina where id_entrenador=:id_entrenador');
			$select->bindValue('id_entrenador',$id_entrenador);
			$select->execute();

		foreach($select->fetchAll() as $diciplina){
			$myDiciplina= new Diciplina();
			$myDiciplina->setid_ed($diciplina['id_ed']);
			$myDiciplina->setid_entrenador($diciplina['id_entrenador']);
			$myDiciplina->setid_diciplina($diciplina['id_diciplina']);
			$myDiciplina->setna($diciplina['na']);
			$myDiciplina->setc_alumno($diciplina['c_alumno']);
			$myDiciplina->setc_e($diciplina['c_e']);
			$listaDiciplinas[]=$myDiciplina;
		}
		return $listaDiciplinas;
	}
/*
		public function obtenerLibro($id_libro){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM libros WHERE id_libro=:id_libro');
			$select->bindValue('id_libro',$id_libro);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Libro();
			$myLibro->setId_libro($libro['id_libro']);
			$myLibro->settitulo($libro['titulo']);
			$myLibro->seteditorial($libro['editorial']);
			$myLibro->setn_edicion($libro['n_edicion']);
			$myLibro->setlugar_publicacion($libro['lugar_publicacion']);
			$myLibro->setfecha_publicacion($libro['fecha_publicacion']);
			$myLibro->setn_hojas($libro['n_hojas']);
			$myLibro->setexistencia($libro['existencia']);
			return $myLibro;
	}
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE libros SET titulo=:titulo, editorial=:editorial, n_edicion=:n_edicion, lugar_publicacion=:lugar_publicacion, fecha_publicacion=:fecha_publicacion, n_hojas=:n_hojas, existencia=:existencia WHERE id_libro=:id');
			$actualizar->bindValue('id',$libro->getId_libro());
			$actualizar->bindValue('titulo',$libro->gettitulo());
			$actualizar->bindValue('editorial',$libro->geteditorial());
			$actualizar->bindValue('n_edicion',$libro->getn_edicion());
			$actualizar->bindValue('lugar_publicacion',$libro->getlugar_publicacion());
			$actualizar->bindValue('fecha_publicacion',$libro->getfecha_publicacion());
			$actualizar->bindValue('n_hojas',$libro->getn_hojas());
			$actualizar->bindValue('existencia',$libro->getexistencia());
			$actualizar->execute();
	}
}*/
}
?>