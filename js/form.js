const formulario = document.querySelector("form"); 
const inputTelefone = document.querySelector("#telefone");
const spanMaximo = document.querySelector("#maximo");
const textMsg = document.querySelector("#mensagem");

// Obtendo e exibindo a quantidade atual de caracteres da mensagem
let quantidadeAtual = textMsg.value.length;
spanMaximo.textContent = quantidadeAtual;

// Monitor de evento de digitação de caracteres no campo mensagem
textMsg.addEventListener("input", function(){

  // Obtendo e exibindo a quantidade de caracteres digitados
  let quantidadeDigitada = textMsg.value.length;
  spanMaximo.textContent = quantidadeDigitada;

  // Ajustando as classes de acordo com a quantidade digitada
  if(quantidadeDigitada == 250 || quantidadeDigitada == 0){
    spanMaximo.classList.remove("bg-success");
    spanMaximo.classList.add("bg-danger");
  } else {
    spanMaximo.classList.remove("bg-danger");
    spanMaximo.classList.add("bg-success");
  }
});

// Utilizando o VanillaMasker

    VMasker(inputTelefone).maskPattern("(99) 9999-99999");

  // Formspree
    var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Obrigado por enviar!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Ops algo deu errado, tente novamente mais tarde!"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Ops algo deu errado, tente novamente mais tarde!"
      });
    }
    form.addEventListener("submit", handleSubmit)