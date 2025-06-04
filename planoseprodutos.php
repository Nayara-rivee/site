<?php
session_start();
$usuarioLogado = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/Planos.css">
  <link rel="stylesheet" href="./css-globais/css/Navbar.css">
  <title>Document</title>

  <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/responsive3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="./img/logo.png" alt="Logo" width="280" height="120" class="d-inline-block align-text-top" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="faleconosco.php">Fale conosco</a>
          </li>
          <?php if ($usuarioLogado): ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cliente.php">Minha conta</a>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
    <div class="theme-container">
      <button id="theme-toggle" class="theme-toggle">
        <i id="theme-icon" class='bx bx-moon theme-icon'></i>
      </button>

    </div>

    <?php if ($usuarioLogado): ?>
      <div>
        <a href="sair.php"><button class="logout" type="submit">Desconectar-se</button></a>
      </div>
    <?php else: ?>
      <div>
        <a href="login.php"><button class="login" type="submit">Login</button></a>
      </div>
    <?php endif; ?>

  </nav>

  <div class="planos">
    <div class="nossos-planos">
      <h1> Planos e Produtos</h1>
      <p>Templates e preços</p>
    </div>
    <section class="container py-5">
      <div id="carouselPlanos" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-wrapper">
          <div class="carousel-inner">
            <!-- Slide 1 - Plano Básico -->
            <div class="carousel-item active">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h2 class="fw-bold">Plano Básico</h2>
                  <p class="text-muted">Ideal para quem está começando</p>
                  <ul>
                    <li>Site simples de 1 página</li>
                    <li>Responsivo</li>
                    <li>Suporte por e-mail</li>
                    <li>R$ 399,00</li>
                  </ul>
                </div>
                <div class="col-md-6 position-relative">
                  <img src="./img/imagem1.jpeg" class="d-block w-100 rounded shadow" alt="Plano Básico" />
                </div>
              </div>
            </div>

            <!-- Slide 2 - Plano Intermediário -->
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h2 class="fw-bold">Plano Intermediário</h2>
                  <p class="text-muted">Para pequenas empresas</p>
                  <ul>
                    <li>Site com até 5 páginas</li>
                    <li>Design personalizado</li>
                    <li>Suporte por WhatsApp</li>
                    <li>R$ 799,00</li>
                  </ul>
                </div>
                <div class="col-md-6 position-relative">
                  <img src="./img/imagem2.jpeg" class="d-block w-100 rounded shadow"
                    alt="Plano Intermediário" />
                </div>
              </div>
            </div>

            <!-- Slide 3 - Plano Profissional -->
            <div class="carousel-item">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <h2 class="fw-bold">Plano Profissional</h2>
                  <p class="text-muted">
                    Para empresas que precisam de mais recursos
                  </p>
                  <ul>
                    <li>Site completo com blog</li>
                    <li>SEO e Analytics</li>
                    <li>Hospedagem e domínio</li>
                    <li>R$ 1.299,00</li>
                  </ul>
                </div>
                <div class="col-md-6 position-relative">
                  <img src="./img/imagem1.jpeg" class="d-block w-100 rounded shadow"
                    alt="Plano Profissional" />
                </div>
              </div>
            </div>
          </div>

          <!-- Botões de navegação -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlanos"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselPlanos"
            data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
          </button>
        </div>
      </div>
    </section>
  </div>

  <div class="vendas">
    <h1>Confira os Nossos Serviços extras para seus sonhos</h1>
  </div>
  <div class="extras-section container mt-5">

    <h2 class="extras-title">Serviços Extras</h2>
    <p class="extras-subtitle">Itens adicionais que podem ser combinados com qualquer plano:</p>
    <ul class="extras-list">
      <li>✅ Versão em inglês/espanhol (tradução + layout) — <strong>+ R$ 398</strong></li>
      <li>✅ Design de ícones e logotipo simples — <strong>R$ 150 - R$ 299</strong></li>
    </ul>
  </div>
  </div>
  <br><br><br><br><br>

  <div class="atendimento">
    <img src="./img/criatividade.svg" alt="">
    <h1>Área de livre criatividade só aqui</h1>
    <p>Se você deseja criar seu website sem que haja barreiras e diversas limitações, aqui você é livre para escolher o
      que quiser para brincar com a criatividade</p>
    <div class="faleconosco">
      <p>atendimento:[dias e horas]</p>
      <p>Para maiores informações fale conosco</p>
      <button><a href="faleconosco.php">Fale conosco</a></button>
    </div>

  </div>


  </main>
  </div>

  <!--tipo dos sites -->

  <div class="container py-5">
    <h2 class="text-center mb-5">Modelos de Sites por Plano</h2>
    <div class="sites row g-4">

      <!-- === PLANO BÁSICO === -->
      <div class="plano col-md-4">
        <div class="card-site p-3 text-center shadow-sm">
          <h5>Plano Básico</h5>
          <div class="site-preview" id="preview-basico">
            <div class="header bg-dark"></div>
            <div class="d-flex" style="flex: 1; gap: 5px;">
              <div class="sidebar bg-dark"></div>
              <div class="content bg-secondary"></div>
            </div>
            <div class="footer bg-dark"></div>
          </div>
          <button class="btn-saiba" data-bs-toggle="modal" data-bs-target="#modalBasico">Saiba mais</button>
        </div>
      </div>

      <!-- === PLANO INTERMEDIÁRIO === -->
      <div class="plano col-md-4">
        <div class="card-site p-3 text-center shadow-sm">
          <h5>Plano Intermediário</h5>
          <div class="site-preview" id="preview-intermediario">
            <div class="header bg-primary"></div>
            <div class="d-flex justify-content-between" style="flex: 1; gap: 5px;">
              <div class="box bg-primary w-25"></div>
              <div class="box bg-primary w-25"></div>
              <div class="box bg-primary w-25"></div>
            </div>
            <div class="footer bg-primary"></div>
          </div>
          <button class="btn-saiba" data-bs-toggle="modal" data-bs-target="#modalIntermediario">Saiba
            mais</button>
        </div>
      </div>

      <!-- === PLANO PRO === -->
      <div class="plano col-md-4">
        <div class="card-site p-3 text-center shadow-sm">
          <h5>Plano Pro</h5>
          <div class="site-preview" id="preview-pro">
            <div class="header bg-success"></div>
            <div class="box bg-success w-100"></div>
            <div class="d-flex justify-content-between" style="gap: 5px;">
              <div class="box bg-success w-50"></div>
              <div class="box bg-success w-50"></div>
            </div>
            <div class="footer bg-success"></div>
          </div>
          <button class="btn-saiba" data-bs-toggle="modal" data-bs-target="#modalPro">Saiba mais</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Plano Básico com Formulário -->
  <div class="modal fade" id="modalBasico" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Plano Básico</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Ideal para portfólios, páginas pessoais ou serviços simples. Inclui 3 seções e formulário de
            contato.</p>
          <hr>
          <form id="formBasico">
            <div class="mb-3">
              <label for="nomeBasico" class="form-label">Seu Nome</label>
              <input type="text" class="form-control" id="nomeBasico" required>
            </div>
            <div class="mb-3">
              <label for="emailBasico" class="form-label">Seu Email</label>
              <input type="email" class="form-control" id="emailBasico" required>
            </div>
            <div class="mb-3">
              <label for="descricaoBasico" class="form-label">Descreva o que deseja no seu site</label>
              <textarea class="form-control" id="descricaoBasico" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar Pedido</button>
          </form>
          <div id="msgBasico" class="mt-2 text-success" style="display: none;">Pedido enviado com sucesso!
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Plano Intermediário com Formulário -->
  <div class="modal fade" id="modalIntermediario" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Plano Intermediário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Para pequenas empresas. Até 6 seções, galeria de fotos, WhatsApp, formulário e site responsivo.
          </p>
          <hr>
          <form id="formIntermediario">
            <div class="mb-3">
              <label for="nomeIntermediario" class="form-label">Seu Nome</label>
              <input type="text" class="form-control" id="nomeIntermediario" required>
            </div>
            <div class="mb-3">
              <label for="emailIntermediario" class="form-label">Seu Email</label>
              <input type="email" class="form-control" id="emailIntermediario" required>
            </div>
            <div class="mb-3">
              <label for="descricaoIntermediario" class="form-label">Descreva o que deseja no seu
                site</label>
              <textarea class="form-control" id="descricaoIntermediario" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar Pedido</button>
          </form>
          <div id="msgIntermediario" class="mt-2 text-success" style="display: none;">Pedido enviado com
            sucesso!</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Plano Pro com Formulário -->
  <div class="modal fade" id="modalPro" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Plano Pro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Projeto completo com painel administrativo, blog, loja, animações, SEO e total personalização.
          </p>
          <hr>
          <form id="formPro">
            <div class="mb-3">
              <label for="nomePro" class="form-label">Seu Nome</label>
              <input type="text" class="form-control" id="nomePro" required>
            </div>
            <div class="mb-3">
              <label for="emailPro" class="form-label">Seu Email</label>
              <input type="email" class="form-control" id="emailPro" required>
            </div>
            <div class="mb-3">
              <label for="descricaoPro" class="form-label">Descreva o que deseja no seu site</label>
              <textarea class="form-control" id="descricaoPro" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Enviar Pedido</button>
          </form>
          <div id="msgPro" class="mt-2 text-success" style="display: none;">Pedido enviado com sucesso!</div>
        </div>
      </div>
    </div>
  </div>


  <script src="./js/mod.js"></script>
  <script src="./js/planoseprodutos.js"></script>
  <!-- Bootstrap + Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function setupForm(idForm, idMsg, plano) {
            const form = document.getElementById(idForm);
            const msg = document.getElementById(idMsg);

            form.addEventListener("submit", function(e) {
                e.preventDefault();

                const nome = form.querySelector("input[type='text']").value;
                const email = form.querySelector("input[type='email']").value;
                const mensagem = form.querySelector("textarea").value;

                fetch("enviar-email.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        },
                        body: new URLSearchParams({
                            nome,
                            email,
                            mensagem: `Plano: ${plano}\n${mensagem}`
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            msg.textContent = "Pedido enviado com sucesso!";
                            msg.classList.remove("text-danger");
                            msg.classList.add("text-success");
                            msg.style.display = "block";
                            form.reset();
                        } else {
                            msg.textContent = data.message || "Erro ao enviar.";
                            msg.classList.remove("text-success");
                            msg.classList.add("text-danger");
                            msg.style.display = "block";
                        }
                        setTimeout(() => msg.style.display = "none", 5000);
                    })
                    .catch(err => {
                        msg.textContent = "Erro na conexão.";
                        msg.classList.remove("text-success");
                        msg.classList.add("text-danger");
                        msg.style.display = "block";
                        setTimeout(() => msg.style.display = "none", 5000);
                    });
            });
        }

        setupForm("formBasico", "msgBasico", "Básico");
        setupForm("formIntermediario", "msgIntermediario", "Intermediário");
        setupForm("formPro", "msgPro", "Pro");
    </script>

    <script>
        const gradients = [
            "linear-gradient(45deg, #ff6b6b, #ff4757)",
            "linear-gradient(45deg, #6c5ce7, #341f97)",
            "linear-gradient(45deg, #00b894, #00cec9)",
            "linear-gradient(45deg, #f1c40f, #f39c12)",
            "linear-gradient(45deg, #e84393, #d63031)",
            "linear-gradient(45deg, #0984e3, #00cec9)"
        ];

        let currentPicker;

        function createGradientPicker(target) {
            if (currentPicker) currentPicker.remove();

            const picker = document.createElement("div");
            picker.className = "gradient-picker";

            gradients.forEach(gradient => {
                const btn = document.createElement("div");
                btn.className = "gradient-option";
                btn.style.background = gradient;
                btn.onclick = () => {
                    target.style.background = gradient;
                    picker.remove();
                };
                picker.appendChild(btn);
            });

            target.parentElement.appendChild(picker);
            currentPicker = picker;
        }

        // Ativar clique nos elementos
        document.querySelectorAll(".header, .footer, .sidebar, .content, .box").forEach(el => {
            el.addEventListener("click", (e) => {
                e.stopPropagation(); // Impede múltiplas ativações
                createGradientPicker(e.target);
            });
        });

        // Clicar fora para fechar picker
        document.addEventListener("click", () => {
            if (currentPicker) {
                currentPicker.remove();
                currentPicker = null;
            }
        });
    </script>
</body>

</html>