<?php
require_once('conectar.php');
 
    class CrudEd{
        public function __construct(){}
    public function mostrardiciplinas($id_entrenador){
            $db=Db::conectar();
            $listaDiciplinas=[];
            $select=$db->prepare('SELECT * FROM entrenador_diciplina where id_entrenador=:id_entrenador ORDER BY id_diciplina ASC;'); 
            $select->bindValue('id_entrenador',$id_entrenador);
            $select->execute();

        foreach($select->fetchAll() as $diciplina){
            $myDiciplina= new Ed();
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
}
?>