<?php
    class ComentarioModelo{
        private $id_comentario;
        private $id_publicacion;
        private $id_usuario;
        private $texto;
        private $fecha_comentario;

        public function __construct(int $id_comentario, publicacionModelo $tipoPublicacion, UsuarioModelo $id_usuario, string $texto, $fecha_comentario){
            $this->id_comentario = $id_comentario;
            $this->id_publicacion = $tipoPublicacion->getId_publicacion();
            $this->id_usuario = $id_usuario->getId();
            $this->texto = $texto;
            $this->fecha_comentario = $fecha_comentario;
        }

        #definir getters y setters

        /**
         * Get the value of id_comentario
         */ 
        public function getId_comentario(){
            return $this->id_comentario;
        }

        /**
         * Set the value of id_comentario
         *
         * @return  self
         */ 
        public function setId_comentario($id_comentario){
            $this->id_comentario = $id_comentario;
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
         * Get the value of texto
         */ 
        public function getTexto(){
            return $this->texto;
        }

        /**
         * Set the value of texto
         *
         * @return  self
         */ 
        public function setTexto($texto){
            $this->texto = $texto;
            return $this;
        }

        /**
         * Get the value of fecha_comentario
         */ 
        public function getFecha_comentario(){
            return $this->fecha_comentario;
        }

        /**
         * Set the value of fecha_comentario
         *
         * @return  self
         */ 
        public function setFecha_comentario($fecha_comentario){
            $this->fecha_comentario = $fecha_comentario;
            return $this;
        }
    } 
?>