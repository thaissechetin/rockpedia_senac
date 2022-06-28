const btn = document.querySelector(".btn-pcd");
const pagina = document.querySelector("body");
const card = document.querySelector(".music-container");

// Evento de click para ativar e desativar
btn.addEventListener("click", function(){
    pagina.classList.toggle("modo-contraste");
});

btn.addEventListener("click", function(){
    card.classList.toggle("card-contraste");
});