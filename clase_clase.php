<?php
    class Clase{
        private $id_clase;
        private $id_ed;
        private $fecha;
        private $hora;
        private $id_entrenador;
        private $nal;

        public function _costruct(){}

        public function getid_clase(){
            return $this->id_clase;
        }
        public function setid_clase($id_clase){
            $this->id_clase = $id_clase;
        }

        public function getid_ed(){
            return $this->id_ed;
        }
        public function setid_ed($id_ed){
            $this->id_ed = $id_ed;
        }

        public function getfecha(){
            return $this->fecha;
        }
        public function setfecha($fecha){
            $this->fecha = $fecha;
        }

        public function gethora(){
            return $this->hora;
        }
        public function sethora($hora){
            $this->hora = $hora;
        }

        public function getid_entrenador(){
            return $this->id_entrenador;
        }
        public function setid_entrenador($id_entrenador){
            $this->id_entrenador = $id_entrenador;
        }

        public function getnal(){
            return $this->nal;
        }
        public function setnal($nal){
            $this->nal = $nal;
        }
    }
?>