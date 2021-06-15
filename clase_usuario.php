<?php
    class Usuario{
        private $id_usuario;
        private $nombre;
        private $contra;

        
        public function __construct(){}

        public function getid_usuario(){
            return $this->id_usuario;
        }
        public function setid_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
            public function getnombre(){
            return $this->nombre;
        }
        public function setnombre($nombre){
            $this->nombre = $nombre;
        }
        public function getcontra(){
            return $this->contra;
        }
        public function setcontra($contra){
            $this->contra = $contra;
        }
    }
?>