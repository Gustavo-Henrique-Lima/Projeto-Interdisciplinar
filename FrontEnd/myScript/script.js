const btn = document.querySelector("button");
const divMessage = document.querySelector(".alert");

const msg = "Algumas funcionalidades só estão disponíveis para docente.";


function ativar(msg) 
{
  const message = document.createElement("p");
  message.classList.add("message");
  message.innerText = msg;

  divMessage.appendChild(message);

  setTimeout(() => {
    message.style.display = "none";
  }, 5000);
}

btn.addEventListener("click", () => {
  ativar(msg);
});