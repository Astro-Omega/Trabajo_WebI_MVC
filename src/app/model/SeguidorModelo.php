<?php
    class seguidorModelo{
        private int $id_usuario_seguidor; //este debe ser de los usuarios que te siguen
        private int $id_usuario_seguido; //este debe ser de los usuarios que tu sigues
        private string $fecha_seguimientos; 


        //definicion de arrais para guadar las fechas y los eventos de tus seguidores y los que sigues
        private $listSeguidores = [];
        private $listSiguiendo = [];

        #definir un conjunto de arrays para poder obtener un objeto de php (definir nombres en las secciones correspondientes)
        public function __construct($data){
            //definicion de las fecha de seguidor/seguimiento
            $this->fecha_seguimientos = $data['fecha_sentencias'];
            $this->id_usuario_seguidor = $data['dataSeguidor'];
            $this->id_usuario_seguido = $data['dataSeguiendo'];

            //guardar los seguidores del usuario
            if(!$this->id_usuario_seguidor === null && $data['sentencia'] == 'seguidor'){
                $this->setSeguidores($this->id_usuario_seguidor, $this->fecha_seguimientos);
            }

            //guardar los perfiles que sigue el usuario [siguiendo]
            if(!$this->id_usuario_seguido === null && $data['sentencia'] == 'siguiendo'){
                $this->setSiguiendo($this->id_usuario_seguido, $this->fecha_seguimientos);
            }
        }

        public function getSegidores(): array{
            return $this->listSeguidores;
        }

        public function getSiguiendo(): array{
            return $this->listSiguiendo;
        }

        #funcion 
        private function setSeguidores($obtenerFecha, $obtenerSeguidor){
            $this->listSeguidores[$obtenerFecha][] = $obtenerSeguidor;
        }

        #funcion 
        private function setSiguiendo($obtenerFecha, $obtenerSeguidos){
            $this->listSiguiendo[$obtenerFecha][] = $obtenerSeguidos;
        }
    }
?>