var caixaNome = document.querySelector("#nome")
var caixaEmail = document.querySelector("#email")
var caixaMensagem = document.getElementById("mensagem")

function validarInputs(event) {

    
    event.preventDefault()

    if (caixaNome.value.length == 0) {
        document.querySelector("#erroNome").style.display = "flex"

        caixaNome.style.border = "1px solid red"

    } else {
        document.querySelector("#erroNome").style.display = "none"

        caixaNome.style.border = "1px solid green"

    }

    if (caixaEmail.value.length == 0) {
        document.querySelector("#erroEmail").style.display = "flex"

        caixaEmail.style.border = "1px solid red"

    } else {

        document.querySelector("#erroEmail").style.display = "none"

        caixaEmail.style.border = "1px solid green"

    }

    if (caixaMensagem.value.length == 0) {

        document.querySelector("#erroMensagem").style.display = "flex"

        caixaMensagem.style.border = "1px solid red"

    } else {

        document.querySelector("#erroMensagem").style.display = "none"

        caixaMensagem.style.border = "1px solid green"

    }
}