<?php 
    require_once "session.php";
    $modality = 10;
    $_SESSION["key"] = "placar";
    require "controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>CliqueFast</title>
    <script src="js/index.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark text-white p-md-3 "><a href="index.php" class="text-decoration-none text-white">CliqueFast</a>
    <div>
        <a class="btn btn-dark border" href="logoff.php">Sair</a>
    </div>
    </nav>
    <div class="mt-5" style="text-align: center;" id="divPrincipal">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Tempo</th>
      <th scope="col">Modalidade</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        for ($x = 0; $x < count($placar); $x++) {
                  
        
    ?>
    <tr>
      <th scope="row"><?php echo $x+1?></th>
      <td><?php echo $placar[$x]->nome?></td>
      <td><?php echo $placar[$x]->timer?></td>
      <td><?php echo $placar[$x]->modality?></td>
    </tr>
    <?php }?>
    </div>
    
</body>
</html>