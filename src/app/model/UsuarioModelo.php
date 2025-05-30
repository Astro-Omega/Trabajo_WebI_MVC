<?php
class UsuarioModelo{
        private $id;
        private $nameUser;
        private $email;
        private $password;
        #entre otros mas atrivutos que se podrian agregar

        //declaracion de un constructor base
        public function __construct($id, $nameUser, $email, $password){
                $this->id = $id;
                $this->nameUser = $nameUser;
                $this->email = $email;
                $this->password = $password;
        }

        #declaracion de los getters y setter necesarios en este modelo

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nameUser
         */ 
        public function getNameUser()
        {
                return $this->nameUser;
        }

        /**
         * Set the value of nameUser
         *
         * @return  self
         */ 
        public function setNameUser($nameUser)
        {
                $this->nameUser = $nameUser;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }
}
?>