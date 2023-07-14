<?php 
   require_once "session.php";
   require "conexao.php";
   require "service.php";
   require "user.php";
   require "timer.php";
   if ((isset($_POST["timer"]) && $_POST["timer"] != "") || (isset($_POST["modality"]) && $_POST["modality"] != "")) {
      $cronometro = new Timer($_POST["timer"], $_POST["modality"]);
      $user = new User($_SESSION["id"], null, null, null);
      $conexao = new Conexao();
      $service = new Service($conexao, $user, $cronometro);
      $service->createCrono();
      header("location: index.php");
   }

?>