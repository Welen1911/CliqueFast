<?php 
    if(isset($_POST["email"]) && isset($_POST["senha"])) {
        if ($_POST["email"] != "" && $_POST["senha"] != "") {
            require "controller.php";
        }
    }


?>