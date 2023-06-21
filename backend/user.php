<?php 
    class User {
        private $name;
        private $email;
        private $password;

        public function __construct($name = null, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
        
        public function __get($name) {
            return $this->$name;
        }
    }

?>