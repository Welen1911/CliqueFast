<?php 
   require "conexao.php";
   require "service.php";
   require "user.php";
   require "timer.php";
   
   if ((isset($_POST["nome"]) && $_POST["nome"] != "") || (isset($_POST["email"]) && $_POST["email"] != "") || (isset($_POST["senha"]) && $_POST["senha"] != "")) {
      $user = new User(null, $_POST["nome"], $_POST["email"], $_POST["senha"]);
      $conexao = new Conexao();
      $service = new Service($conexao, $user, null);
      $obj = $service->create();
      session_start();
      $_SESSION["id"] = $obj->id;
      header("location: index.php");
   } else {
      header("location: cadastro.php?erro=empty");
   }

?>