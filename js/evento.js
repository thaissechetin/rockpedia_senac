const btn = document.querySelector(".btn-pcd");
const card = document.querySelector(".card-body");
const pagina = document.querySelector("main");
const rodape = document.querySelector("footer");

// Evento de click para ativar e desativar
btn.addEventListener("click", function(){
    pagina.classList.toggle("modo-contraste");
});