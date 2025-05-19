<?php
    class ReaccionModelo{
        private $id_reaccion;
        private $id_usuario;
        private $id_publicacion;
        private $tipo_reaccion;
        private $fecha_reaccion;

        #re interpretar el tipo de reacciones que existen en nuestra aplicacion
        public function __construct(int $id_reaccion, UsuarioModelo $id_usuario, publicacionModelo $id_publicacion, Tipo_reaccionModelo $tipo_reaccion, $fecha_reaccion){
            $this->id_reaccion = $id_reaccion;
            $this->id_usuario = $id_usuario->getId();
            $this->id_publicacion = $id_publicacion->getId_publicacion();
            $this->tipo_reaccion = $tipo_reaccion;
            $this->fecha_reaccion = $fecha_reaccion;
        }

        #definir getters y setters

        /**
         * Get the value of id_reaccion
         */ 
        public function getId_reaccion(){
            return $this->id_reaccion;
        }

        /**
         * Set the value of id_reaccion
         *
         * @return  self
         */ 
        public function setId_reaccion($id_reaccion){
            $this->id_reaccion = $id_reaccion;
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
         * Get the value of tipo_reaccion
         */ 
        public function getTipo_reaccion(){
            return $this->tipo_reaccion;
        }

        /**
         * Set the value of tipo_reaccion
         *
         * @return  self
         */ 
        public function setTipo_reaccion($tipo_reaccion){
            $this->tipo_reaccion = $tipo_reaccion;
            return $this;
        }

        /**
         * Get the value of fecha_reaccion
         */ 
        public function getFecha_reaccion(){
            return $this->fecha_reaccion;
        }

        /**
         * Set the value of fecha_reaccion
         *
         * @return  self
         */ 
        public function setFecha_reaccion($fecha_reaccion){
            $this->fecha_reaccion = $fecha_reaccion;
            return $this;
        }
    }
?>