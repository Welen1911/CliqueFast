<?php 
    require_once "session.php";
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
    <script>
        let limite = "0";
        function selecionarLimite(valor) {
           limite = valor
        }
    </script>
</head>
<body>
    <nav class="navbar-dark bg-dark text-white p-md-3"><a href="index.php" class="text-decoration-none text-white">CliqueFast</a>
        <a class="btn btn-dark" href="logoff.php">Sair</a>
    </nav>
    <div class="mt-5" style="text-align: center;" id="divPrincipal">
        <div>
            <h1 id="contador" class="text-body-emphasis mb-3"></h1>
        </div>
        <div id="select">
        Selecione a modalidade:
        <div class="form-check form-check-inline" onclick="selecionarLimite('10')">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="10">
            <label class="form-check-label" for="inlineRadio1">10</label>
          </div>
          <div class="form-check form-check-inline" onclick="selecionarLimite('30')">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="30">
            <label class="form-check-label" for="inlineRadio2">30</label>
          </div>
          <div class="form-check form-check-inline" onclick="selecionarLimite('100')">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="100">
            <label class="form-check-label" for="inlineRadio3">100</label>
          </div></div>
        <button class="btn btn-dark mb-3 mt-3" onclick="inicializacao('contador')" id="botao" disabled>Começar</button>
        <h2 id="cronometro"></h2>
    </div>
</body>
<script>
    let hh = 0; 
    let mm = 0; 
    let ss = 0;
    function cronometro() {
        ss++;
        if (ss === 60) {
            mm++;
            ss = 0;
            if (mm == 60) {
                hh++;
                mm = 0;
            }
        }
    let cronometro = document.getElementById("cronometro");
    cronometro.innerHTML = `${hh >= 10 ? hh : "0"+hh}:${mm >= 10 ? mm : "0"+mm}:${ss >= 10 ? ss : "0"+ss}`
}
     let intervalo = setInterval(() => {
        if (document.getElementById("botao").innerHTML === "Acrescentar") {
            cronometro()
        } 
        if (limite != "0" && document.getElementById("botao").disabled == true) {
            document.getElementById("botao").disabled = false;

        }
        if (document.getElementById("contador").innerHTML == limite) {
            clearInterval(intervalo);
            document.getElementById("botao").disabled = true;
            if (!document.getElementById("menu")) {
                let menu = document.createElement("a");
                menu.className = "btn btn-primary";
                menu.innerHTML = "Menu Principal";
                menu.id = "menu";
                menu.href = "index.php";
                document.getElementById("divPrincipal").appendChild(menu)

            }
        } 
    }, 20);
</script>
</html>