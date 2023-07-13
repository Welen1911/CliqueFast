<?php 
   require_once "session.php";
   require "conexao.php";
   require "service.php";
   require "user.php";
   require "timer.php";
   if ((isset($_POST["timer"]) && $_POST["timer"] != "") || (isset($_POST["modality"]) && $_POST["modality"] != "")) {
      $cronometro = new Timer($_POST["timer"], $_POST["modality"]);
      $conexao = new Conexao();
      $service = new Service($conexao, null, $cronometro);
      echo "<pre>";
      print_r("Timer: ".$cronometro->timer." Modality: ".$cronometro->modality);
      echo "<pre>";
   }

?>