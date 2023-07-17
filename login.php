<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>CliqueFast</title>
    <script src="js/loginVerify.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark text-white p-md-3 "><a href="index.php" class="text-decoration-none text-white">CliqueFast</a>
    </nav>
    <div class="mt-5" style="text-align: center;" id="divPrincipal">
        <div>
            <form action="validaLogin.php" method="post">
                <div>
                    <h2 class="mb-5">Login</h2>
                </div>
                <div class="mb-3">
                    <input class="col-sm-2" name="email" id="email" type="email" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <input class="col-sm-2" name="senha"  id="senha" type="password" placeholder="Senha">
                </div>
                <div class="mb-3">
                    <button class="btn btn-dark col-sm-2" type="submit" id="botaoEntrar" disabled>Entrar</button>
                </div>
                <div class="mb-3">
                    <a class="btn btn-dark col-sm-2" href="cadastro.php" id="cadastro">Criar conta</a>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    setInterval(() => {
        verificaLogin()
    }, 100);
</script>
</html>