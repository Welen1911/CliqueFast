<?php 
    class Service {
        private $conexao;
        private $user;
        private $timer;

        public function __construct(Conexao $conexao, User $user = null, Timer $timer = null) {
            $this->conexao = $conexao->conectar();
            $this->user = $user;
            $this->timer = $timer;
        }


        public function create() {
            $query = "insert into tb_usuarios(nome, email, senha) values (:nome, :email, :senha)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":nome", $this->user->__get("name"));
            $stmt->bindValue(":email", $this->user->__get("email"));
            $stmt->bindValue(":senha", $this->user->__get("password"));
            $stmt->execute();
            
            $query = "select id, nome, email from tb_usuarios where email = :email and senha = :senha";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":email", $this->user->__get("email"));
            $stmt->bindValue(":senha", $this->user->__get("password"));
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        public function createCrono() {
            $query = "insert into tb_crono(timer, id_usuario, modality) values (:timer, :id_usuario, :modality)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(":timer", $this->timer->__get("timer"));
            $stmt->bindValue(":id_usuario", $this->user->__get("id_usuario"));
            $stmt->bindValue(":modality", $this->timer->__get("modality"));
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

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