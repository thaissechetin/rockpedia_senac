const btn = document.querySelector(".btn-pcd");
const pagina = document.querySelector("main");
const card = document.querySelector(".card-body");

// Evento de click para ativar e desativar
btn.addEventListener("click", function(){
    pagina.classList.toggle("modo-contraste");
});

btn.addEventListener("click", function(){
    card.classList.toggle("contraste");
});