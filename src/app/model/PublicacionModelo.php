<?php
    class publicacionModelo{
        //definicion de los atributos parciales
        private $id_publicacion;
        private $id_usuario;
        private $id_tipo_publicacion;
        private $descripcion;
        private $contenio;
        private $fecha_publicacion;
        private $duracion;
        
        public function __construct(int $id_publicacion, UsuarioModelo $id_usuario, int $id_tipo_publicacion, string $descripcion, $contenio, $fecha_publicacion, $duracion){
            $this->id_publicacion = $id_publicacion;
            $this->id_usuario = $id_usuario->getId();
            $this->id_tipo_publicacion = $id_tipo_publicacion;
            $this->descripcion = $descripcion;
            $this->contenio = $contenio; // que tipo de contenido se refiere?
            $this->fecha_publicacion = $fecha_publicacion;
            $this->duracion = $duracion; // solo para audios y videos
        }

        /**
         * Get the value of id_publicacion
         */ 
        public function getId_publicacion(){
            return $this->id_publicacion;
        }

        /**
         * Set the value of id_publicacion
         *
         * @return  self
         */ 
        public function setId_publicacion($id_publicacion){
            $this->id_publicacion = $id_publicacion;
            return $this;
        }

        /**
         * Get the value of id_usuario
         */ 
        public function getId_usuario(){
            return $this->id_usuario;
        }

        /**
         * Set the value of id_usuario
         *
         * @return  self
         */ 
        public function setId_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
            return $this;
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
         * Get the value of descripcion
         */ 
        public function getDescripcion(){
            return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
            return $this;
        }

        /**
         * Get the value of contenio
         */ 
        public function getContenio(){
            return $this->contenio;
        }

        /**
         * Set the value of contenio
         *
         * @return  self
         */ 
        public function setContenio($contenio){
            $this->contenio = $contenio;
            return $this;
        }

        /**
         * Get the value of fecha_publicacion
         */ 
        public function getFecha_publicacion(){
            return $this->fecha_publicacion;
        }

        /**
         * Set the value of fecha_publicacion
         *
         * @return  self
         */ 
        public function setFecha_publicacion($fecha_publicacion){
            $this->fecha_publicacion = $fecha_publicacion;
            return $this;
        }

        /**
         * Get the value of duracion
         */ 
        public function getDuracion(){
            return $this->duracion;
        }

        /**
         * Set the value of duracion
         *
         * @return  self
         */ 
        public function setDuracion($duracion){
            $this->duracion = $duracion;
            return $this;
        }
        

        #crear la logica para retornar el tiempo en minutos (solo para duracion)
    }
?>