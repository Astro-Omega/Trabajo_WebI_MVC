<?php
    class Tipo_publicacionModelo{
        private $id_tipo_publicacion;
        private $tipoPublicacion;

        public function __construct(publicacionModelo $id_tipo_publicacion, $tipoPublicacion){
            $this->id_tipo_publicacion = $id_tipo_publicacion->getId_publicacion();

            #forma de identificar a los tipos de reaccion dentro del enum TipoReaccion [Posiblemente despreciado]
            $this->tipoPublicacion = TipoPublicacion::retornarTipo($tipoPublicacion);
        }

        /**
         * Get the value of id_tipo_publicacion
         */ 
        public function getId_tipo_publicacion(){
            return $this->id_tipo_publicacion;
        }

        /**
         * Set the value of id_tipo_publicacion
         *
         * @return  self
         */ 
        public function setId_tipo_publicacion($id_tipo_publicacion){
            $this->id_tipo_publicacion = $id_tipo_publicacion;
            return $this;
        }

        /**
         * Get the value of tipoPublicacion
         */ 
        public function getTipoPublicacion(){
            return $this->tipoPublicacion;
        }

        /**
         * Set the value of tipoPublicacion
         *
         * @return  self
         */ 
        public function setTipoPublicacion($tipoPublicacion){
            $this->tipoPublicacion = $tipoPublicacion;
            return $this;
        }
    }
?>