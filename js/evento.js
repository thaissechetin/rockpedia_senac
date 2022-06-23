const btn = document.querySelector(".btn-pcd");
const pagina = document.querySelector("main");

// Evento de click para ativar e desativar
btn.addEventListener("click", function(){
    pagina.classList.toggle("modo-contraste");
});