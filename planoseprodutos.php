<?php
session_start();
$usuarioLogado = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/PlanoS.css">
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

  <div class="container2 ">
    <h2>Brinque com a criatividade aqui mesmo!</h2>
    <div class="cards-sites">
      <h3>Site dinamico</h3>
      <!-- Card -->
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico.php" class="link1">Saiba mais</a>

    </div>

    <div class="cards-sites">

      <h1>Site dinamico</h1>
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options2">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color2">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons2">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico copy.php" class="link2">Saiba mais</a>
    </div>

    <div class="cards-sites">
      <h3>Site dinamico</h3>
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico copy 2.php" class="link1">Saiba mais</a>
    </div>

    <div class="cards-sites">

      <h1>Site dinamico</h1>
      <div class="card2">
        <!-- Header -->
        <header>
          <h1>logo</h1>
        </header>

        <!-- Body -->
        <div class="body">
          <div class="div-lateral"></div>
          <div class="div-grande"></div>
          <div class="divs1"></div>
          <div class="divs2"></div>
          <div class="divs3"></div>
        </div>

        <!-- Footer -->
        <footer>&copy; 2023 Mini Layout</footer>



      </div>

      <!-- Quadradinhos de cores -->

      <div class="color-options2">
        <label for="colorInput">Escolha uma cor:</label>
        <div class="color-option" data-color="#ff6b6b"></div>
        <div class="color-option" data-color="#6b5b95"></div>
        <div class="color-option" data-color="#4ecdc4"></div>
        <div class="color-option" data-color="#ffd166"></div>
      </div>
      <!-- Input de cor personalizada -->
      <div class="custom-color2">
        <label for="colorInput">Escolha uma cor:</label>
        <input type="color" id="colorInput" value="#ff6b6b" />
      </div>
      <!-- Botões fixos para trocar o fundo -->
      <div class="background-buttons2">
        <label for="colorInput">Escolha uma cor de fundo:</label>
        <button data-bg="white">Branco</button>
        <button data-bg="gray">Cinza</button>
        <button data-bg="black">Preto</button>
      </div>

      <a href="sitedinamico copy 3.php" class="link2">saiba mais</a>
    </div>
  </div>
  <script src="./js/mod.js"></script>
  <script src="./js/planoseprodutos.js"></script>
</body>

</html>