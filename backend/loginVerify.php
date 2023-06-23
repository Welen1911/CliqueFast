<?php 
    require "conexao.php";
    require "service.php";
    require "user.php";
    
    if(isset($_POST["email"]) && isset($_POST["senha"])) {
        if ($_POST["email"] != "" && $_POST["senha"] != "") {
            
            $conexao = new Conexao();
            $user = new User(null, $_POST["email"], $_POST["senha"]);
            $service =  new Service($conexao, $user);
            $read = $service->read();
            if ($read == null) {
                header("location: login.php?erro=true");
            } else {
                session_start();
                $_SESSION["id"] = $read->id;
                header("location: index.php");
            }
        } else {
            header("location: login.php?error=empty");
        }
    } else {
        header("location: login.php?error=empty");
    }


?>