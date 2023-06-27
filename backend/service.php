<?php 
    class Service {
        private $conexao;
        private $user;
        private $timer;

        public function __construct(Conexao $conexao, User $user = null, $timer = null) {
            $this->conexao = $conexao->conectar();
            $this->user = $user;
            $this->timer = $timer;
        }


        public function create() {}

        public function read() {
            $query = "select id, nome, email from tb_usuarios where email = :email and senha = :senha";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":email", $this->user->__get("email"));
            $stmt->bindValue(":senha", $this->user->__get("password"));
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        
        public function upgrade() {}
        
        public function delete() {}

    }



?>