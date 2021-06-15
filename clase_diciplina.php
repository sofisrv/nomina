<?php
    class Diciplina{
        private $nombre;
        private $id_diciplina;

        public function _costruct(){}

        public function getid_diciplina(){
            return $this->id_diciplina;
        }
        public function setid_diciplina($id_diciplina){
            $this->id_diciplina = $id_diciplina;
        }

        public function getnombre(){
            return $this->nombre;
        }
        public function setnombre($nombre){
            $this->nombre = $nombre;
        }
    }
?>