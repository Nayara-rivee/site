<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/FaleConosco.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
  <div class="site-wrapper">
    <main>
      <div class="wrapper">
        <section class="contact-section">
          <h2 class="section-title">Fale Conosco</h2>

          <div class="contact-page container grid">
            <form action="https://api.web3forms.com/submit" method="POST" class="contact-form grid" id="contact-form">
              <div class="contact-group grid">
                <div class="contact-card">
                  <input type="hidden" name="access_key" value="d6b57578-e91e-4d2a-acd5-70502be41640">
                  <input type="text" name="user_name" id="name" required placeholder="Insira Seu nome" class="contact-input">
                  <label for="name" class="contact-label">Usuário</label>
                </div>

                <div class="contact-card">
                  <input type="email" name="user_email" id="email" required placeholder="exemplo@gmail.com" class="contact-input">
                  <label for="email" class="contact-label">Email</label>
                </div>
              </div>

              <div class="contact-card contact-area">
                <textarea name="user_message" id="message" required placeholder="fale seu comentário" class="contact-input"></textarea>
                <label for="message" class="contact-label">Mensagem</label>
              </div>
              <button type="submit" class="contact-send button">Enviar mensagem</button>
            </form>

            <div class="social-icons">
              <a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a>
              <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
              <a href="#" target="_blank"><i class='bx bxl-github'></i></a>
              <a href="#" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </div>
          </div>
        </section>
      </div>

      <h1 class="boas-vindas">Seja Bem-vindo!</h1>
      <div class="img2">
        <img src="img/faleconosco.jpeg" alt="">
      </div>
      <h5 class="agradecimento">Muito obrigado por nos acompanhar!</h5>
      <button class="voltar"><a href="index.php">voltar para o início</a></button>
    </main>

    <footer class="py-5 mt-5" style=" color: #fff;">
      <div class="container3">
        <div class="row">
          <!-- Logo -->
          <div class="col-md-4 mb-4">
            <img src="./img/logo.png" alt="Logo da Empresa" style="width: 250px; margin-bottom: 10px;">
            <p class="small">Criamos sites modernos e personalizados para empresas de todos os portes.</p>
          </div>

          <!-- Links -->
          <div class="col-md-4 mb-4">
            <h5>Links úteis</h5>
            <ul class="list-unstyled">
              <li><a href="#div-empresa">Quem somos</a></li>
              <li><a href="#servicos">Serviços</a></li>
              <li><a href="faleconosco.php">Contato</a></li>
              <li><a href="cliente.php">Área do cliente</a></li>
            </ul>
          </div>

          <!-- Contato -->
          <div class="col-md-4 mb-4">
            <h5>Fale conosco</h5>
            <p class="small">Email: contato@seudominio.com</p>
            <p class="small">Telefone: (00) 1234-5678</p>
            <div class="mt-3">
              <a href="#" class="me-3"><i class="fab fa-facebook fa-lg text-white"></i></a>
              <a href="#" class="me-3"><i class="fab fa-instagram fa-lg text-white"></i></a>
              <a href="#"><i class="fab fa-linkedin fa-lg text-white"></i></a>
            </div>
          </div>
        </div>

        <div class="text-center pt-4 border-top border-secondary mt-4">
          <p class="mb-0 small">&copy; 2025 Aurora Ability IT. Todos os direitos reservados.</p>
        </div>
      </div>
    </footer>
  </div>
</body>


</html>