// Seleciona todos os botões e modais
const botao = document.querySelectorAll('.botao');
const modals = document.querySelectorAll('.modal');
const closeButtons = document.querySelectorAll('.close');

// Adiciona evento de clique para cada botão
botao.forEach((botao, index) => {
    botao.addEventListener('click', () => {
        const videoId = `video${index + 1}`; // modal1, modal2, etc.
        const modal = document.getElementById(videoId);
        modal.classList.add('show'); // Abre o modal correspondente
    });
});

// Adiciona evento de clique para cada botão de fechar
closeButtons.forEach(closeButton => {
    closeButton.addEventListener('click', () => {
        const videoId = closeButton.getAttribute('data-modal'); // Pega o modal associado
        const modal = document.getElementById(videoId);
        modal.classList.remove('show'); // Fecha o modal
        const iframe = modal.querySelector('iframe');
        iframe.src = iframe.src; // Reinicia o vídeo
    });
});

// login
 // Se o usuário estiver logado, mostra "Minha conta"
 if (localStorage.getItem("usuarioLogado") === "true") {
    const minhaConta = document.getElementById("minhaConta");
    if (minhaConta) {
      minhaConta.style.display = "block";
    }
  }



  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 2,
      },
      320: {
        slidesPerView: 1,
      },
    },
  });


