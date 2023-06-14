let contador = 0;
let flag = false;
function acrescentar(id_contador) {
   
    let botao = document.getElementById("botao")
    let mostrador = document.getElementById(id_contador);
    
    mostrador.innerHTML = contador
    contador++; 
}
function inicializacao(id_contador) {
    
    let botao = document.getElementById("botao")
    let mostrador = document.getElementById(id_contador);
    
    if (mostrador.innerHTML === "") {
        document.getElementById("select").remove();
       botao.innerHTML = "Acrescentar";
       acrescentar(id_contador);
    } else {
        acrescentar(id_contador);
        flag = true;
    }
}


