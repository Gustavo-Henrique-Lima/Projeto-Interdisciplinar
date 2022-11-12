const btn = document.querySelector("button");
const divMessage = document.querySelector(".alert");

const msg = "Alerta!!";

let menssageFinal = "";
count = 0;
function quebrarLinha() {
  for (var i = 0; i < msg.length; i++) 
  {
    count++;
    menssageFinal += msg[i];
    if (count >= 60) 
    {
      menssageFinal += "\n";
      count = 0;
    }
  }
}

function ativar(msg) 
{
  const message = document.createElement("p");
  message.classList.add("message");
  quebrarLinha();
  message.innerText = msg;

  divMessage.appendChild(message);

  setTimeout(() => {
    message.style.display = "none";
  }, 5000);
}

btn.addEventListener("click", () => {
  ativar(msg);
});