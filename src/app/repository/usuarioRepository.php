<?php
    require_once __DIR__ . '/../../config/configdb.php'; //<-- eliminar extencion de la configuracion sql
    include_once __DIR__ . '/../model/UsuarioModelo.php';

    class usuarioRepository{
        private $conn;

        public function __construct(){
            $this->conn = BaseDatos::getInstancia()->getConexion();
        }

        //LOGICA DE BASE DE DATOS USUARIO:
        /**
         * @param UsuarioModelo $usuario de entrada requiere un objeto usuario 
         * @return void no retorna nada por ahora
         */

        #guardar la informacion de los usuarios en un objetos
        public function guardarUsuario(UsuarioModelo $usuario){
            try {
                $conectar = $this->conn->prepare('INSERT INTO usuario (name_usuario, email_usuario, password_usuario) VALUES (?, ?, ?)');
                #Creacion de variables que almacenaran los datos principales
                $nameUser = $usuario->getNameUser();
                $email = $usuario->getEmail();
                // $password = $usuario->getPassword();
                //proto-avance:
                $passHash = password_hash($usuario->getPassword(), PASSWORD_DEFAULT);

                $conectar->bind_param('sss', $nameUser, $email, $passHash);
                if(!$conectar->execute()){
                    throw new Exception('No se puede realizar la sentencia SQL: guardar un objeto usuario');
                }
            } catch (Exception $e) {
                //throw $th;
                echo 'Error al ejecutar esta linea de codigo'.$e;
            }
        }

        /**
         * @param string $nameUser de entrada requiere el nombre de la persona
         * @return UsuarioModelo $usuario retorna el usuario de la base de datos
         */

        #guardar la informacion de los usuarios en un objetos
        public function verificarUsuario(string $nameUser){
            $conectar = $this->conn->prepare('SELECT * FROM usuario WHERE name_usuario = ?');
            $conectar->bind_param('s', $nameUser);
            $conectar->execute();
            $resultado = $conectar->get_result();
            $usuario = null;
            if($row = $resultado->fetch_assoc()){
                
                $usuario = new UsuarioModelo(
                    ['id' => $row['id_usuario']],
                    ['nameUser' => $row['name_usuario']],
                    ['email' => $row['email_usuario']],
                    ['password' => $row['password_usuario']]
                );
            }

            return $usuario;
        }

        /**
         * @param string $email es necesario pasar el email en est
         * @return bool devuelve [falso | verdadero] 
         */
        #buscar en la base de datos el email (si existe)
        public function buscarEmailUser(string $email){
            try {
                $conectar = $this->conn->prepare('SELECT COUNT(*) as count FROM usuario WHERE email_usuario');
                $conectar->bind_param('s', $email);
                $conectar->execute();
                $res = $conectar->get_result();
                $fila = $res->fetch_assoc();
                return $fila['count'] > 0;
            } catch (Exception $e) {
                echo 'Error al ejecutar esta linea de codigo'.$e;
            }
        }

        /**
         * @param string $name requiere el nombre que se va a usar en el formulario de registro
         * @return bool devuelve [falso | verdadero] si si se encuentra el nombre en la base de datos este no puede ser usado nuevamente
         */
        #buscar el la base de datos en name/nick/u otra denominacion
        public function buscarNameUserExistente(string $name){
            try {
                $conectar = $this->conn->prepare('SELECT COUNT(*) as count FROM usuario WHERE name_usuario');
                $conectar->bind_param('s', $name);
                $conectar->execute();
                $res = $conectar->get_result();
                $fila = $res->fetch_assoc();
                return $fila['count'] > 0;
            } catch (Exception $e) {
                echo 'Error al ejecutar esta linea de codigo'.$e;
            }
        }
    }
?>