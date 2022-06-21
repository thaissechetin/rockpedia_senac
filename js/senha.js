let btn = document.querySelector ('.senha1')
btn.addEventListener ('click', ()=> {
    let inputSenha = document.querySelector ('#senha')
    if (inputSenha.getAttribute('type') == 'password') {
        inputSenha.setAttribute('type', 'text')
    } else {
        inputSenha.setAttribute ('type', 'password')
    }
})