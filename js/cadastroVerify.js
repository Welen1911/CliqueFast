function verificarCampos() {
    let nome = document.getElementById("nome")
    let email = document.getElementById("email")
    let senha = document.getElementById("senha")


    if ((nome.value != "") && (email.value != "") && (senha.value.length >= 6)) {
        document.getElementById("cadastrar").disabled = false
    } else {
        document.getElementById("cadastrar").disabled = true
    }
}