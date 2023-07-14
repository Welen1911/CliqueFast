<?php 
    class User {
        private $name;
        private $email;
        private $password;
        private $id_usuario;

        public function __construct($id_usuario = null, $name = null, $email, $password) {
            $this->id_usuario = $id_usuario;
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
        
        public function __get($name) {
            return $this->$name;
        }
    }

?>