<?php 
    $nome = "";
    if(isset($_GET["nome"])) {
        $nome = $_GET["nome"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>CliqueFast</title>
</head>
<body>
    <nav class="navbar-dark bg-dark text-white p-md-3"><a href="index.html" class="text-decoration-none text-white">CliqueFast</a></nav>
    <div class="mt-5" style="text-align: center;" id="divPrincipal">
        <div>
           <h1><?php echo $nome?></h1>
        </div>
    </div>
</body>
</html>