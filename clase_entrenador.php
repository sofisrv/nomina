<?php
    class Entrenador{
        private $id_entrenador;
        private $nombre;
        private $correo;
        private $contra;

        public function _costruct(){}

        public function getid_entrenador(){
            return $this->id_entrenador;
        }
        public function setid_entrenador($id_entrenador){
            $this->id_entrenador = $id_entrenador;
        }

        public function getnombre(){
            return $this->nombre;
        }
        public function setnombre($nombre){
            $this->nombre = $nombre;
        }

        public function getcorreo(){
            return $this->correo;
        }
        public function setcorreo($correo){
            $this->correo = $correo;
        }

        public function getcontra(){
            return $this->contra;
        }
        public function setcontra($contra){
            $this->contra = $contra;
        }
    }
?>