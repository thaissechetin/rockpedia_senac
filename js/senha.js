let btn2 = document.querySelector ('.senha1')
btn2.addEventListener ('click', ()=> {
    let inputSenha = document.querySelector ('#senha')
    if (inputSenha.getAttribute('type') == 'password') {
        inputSenha.setAttribute('type', 'text')
    } else {
        inputSenha.setAttribute ('type', 'password')
    }
})