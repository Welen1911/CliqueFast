<?php 
    require "conexao.php";
    require "service.php";
    require "user.php";
    
    
    $conexao = new Conexao();
    $user = new User(null, $_POST["email"], $_POST["senha"]);
    $service =  new Service($conexao, $user);
    $read = $service->read();
    
    header("location: logado.php?nome=$read->nome");


?>