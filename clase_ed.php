<?php
    class Ed{
        private $id_ed;
        private $id_entrenador;
        private $id_diciplina;
        private $na;
        private $c_alumno;
        private $c_e;

        public function _costruct(){}

        public function getid_ed(){
            return $this->id_ed;
        }
        public function setid_ed($id_ed){
            $this->id_ed = $id_ed;
        }
        public function getid_entrenador(){
            return $this->id_entrenador;
        }
        public function setid_entrenador($id_entrenador){
            $this->id_entrenador = $id_entrenador;
        }
        public function getid_diciplina(){
            return $this->id_diciplina;
        }
        public function setid_diciplina($id_diciplina){
            $this->id_diciplina = $id_diciplina;
        }
        public function getna(){
            return $this->na;
        }
        public function setna($na){
            $this->na = $na;
        }
        public function getc_alumno(){
            return $this->c_alumno;
        }
        public function setc_alumno($c_alumno){
            $this->c_alumno = $c_alumno;
        }
        public function getc_e(){
            return $this->c_e;
        }
        public function setc_e($c_e){
            $this->c_e = $c_e;
        }
    }
?>