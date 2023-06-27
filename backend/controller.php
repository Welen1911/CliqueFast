<?php 
   require_once "session.php";
   require "conexao.php";
   require "service.php";
   require "user.php";

   if ((isset($_GET["timer"]) && $_GET["timer"] != "" ||  $_GET["timer"] != null) && (isset($_GET["modality"]) && $_GET["modality"] != "" || $_GET["modality"] != null)) {
      $timer = $_GET["timer"];
      $conexao = new Conexao();
      $service = new Service($conexao, null, $timer);
    
      echo "<pre>";
      print_r("Timer: ".$_GET["timer"]." Modality: ".$_GET["modality"]);
      echo "<pre>";
   }

?>