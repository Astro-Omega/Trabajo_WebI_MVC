<?php
    class Tipo_reaccionModelo{
        private $id_tipo_reaccion;
        private $enumReaccion;

        public function __construct(int $id_tipo_reaccion, $tipo){
            $this->id_tipo_reaccion = $id_tipo_reaccion;

            #forma de identificar a los tipos de reaccion dentro del enum TipoReaccion [Posiblemente despreciado]
            $this->enumReaccion = TipoReaccion::retornarTipo($tipo);
        }

        /**
         * Get the value of id_tipo_reaccion
         */ 
        public function getId_tipo_reaccion(){
            return $this->id_tipo_reaccion;
        }

        /**
         * Set the value of id_tipo_reaccion
         *
         * @return  self
         */ 
        public function setId_tipo_reaccion($id_tipo_reaccion){
            $this->id_tipo_reaccion = $id_tipo_reaccion;
            return $this;
        }

        /**
         * Get the value of enumReaccion
         */ 
        public function getEnumReaccion(){
            return $this->enumReaccion;
        }

        /**
         * Set the value of enumReaccion
         *
         * @return  self
         */ 
        public function setEnumReaccion($enumReaccion){
            $this->enumReaccion = $enumReaccion;
            return $this;
        }
    }
?>