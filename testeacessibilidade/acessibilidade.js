let leituraIniciada = false;

function ativarLeitura(texto) {
  speechSynthesis.cancel();
  const msg = new SpeechSynthesisUtterance(texto);
  speechSynthesis.speak(msg);
}

function ativarLeituraBoasVindas() {
  ativarLeitura("Bem-vindo ao nosso site acessível. Use Tab para navegar e Escape para parar a leitura.");
}

function iniciarLeituraSeNecessario() {
  if (!leituraIniciada) {
    leituraIniciada = true;
    ativarLeituraBoasVindas();
  }
}

function alternarModoDaltônico() {
  document.body.classList.toggle("modo-daltonico");
}

function ajustarFonte(acao) {
  document.body.classList.remove("aumentar-fonte", "reduzir-fonte");
  if (acao === "aumentar") document.body.classList.add("aumentar-fonte");
  else if (acao === "reduzir") document.body.classList.add("reduzir-fonte");
}

// Eventos
window.addEventListener("click", iniciarLeituraSeNecessario);
window.addEventListener("keydown", iniciarLeituraSeNecessario);

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('[tabindex][data-leitura]').forEach(el => {
    el.addEventListener("focus", () => {
      const texto = el.getAttribute("data-leitura");
      if (texto) ativarLeitura(texto);
    });
  });

  document.querySelectorAll('[data-leitura]').forEach(el => {
    el.addEventListener("click", () => {
      const texto = el.getAttribute("data-leitura");
      if (texto) ativarLeitura(texto);
    });
  });
});

document.addEventListener("keydown", e => {
  if (e.key === "Escape") speechSynthesis.cancel();
});

// VLibras
window.addEventListener("DOMContentLoaded", () => {
  const script = document.createElement("script");
  script.src = "https://vlibras.gov.br/app/vlibras-plugin.js";
  script.onload = () => new window.VLibras.Widget('https://vlibras.gov.br/app');
  document.body.appendChild(script);
});
