<?php
    include_once __DIR__ . '/../config/establecerBD.php';
    class BaseDatos{
        private static $instancia = null;
        private $conn = null;

        private function __construct(){
            try {
                $this->conn = new mysqli(BD_HOST, BD_USER, BD_PASS, BD_BASE);
            } catch (\Throwable $th) {
                error_log('Error fatal a la hora de realizar la instancia');
            }
        }

        //retornar la instancia de la base
        public static function getInstancia(){
            if(self::$instancia === null){
                self::$instancia = new BaseDatos();
            }
            return self::$instancia;
        }

        //retornar la conexion de la base de datos
        public function getConexion(){
            return $this->conn;
        }

        //cierra la conexion
        private function cerrarConexion(){
            if($this->conn){
                $this->conn->close();
                $this->conn = null;
                self::$instancia = null;
            }
        }

        public function __destruct(){
            $this->cerrarConexion();
        }
    }
?>