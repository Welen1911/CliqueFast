const verificaLogin = () => {
    let email = document.getElementById("email")
    let senha = document.getElementById("senha")

    if (email.value != "" && senha.value.length >= 6) {
        document.getElementById("botaoEntrar").disabled = false
    } else {
        document.getElementById("botaoEntrar").disabled = true
    }
}
