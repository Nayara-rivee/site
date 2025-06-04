<?php
session_start();
$usuarioLogado = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="src/css/home.css" />
  <link rel="stylesheet" href="src/css/banner.css">
  <link rel="stylesheet" href="src/css-globais/css/Navbar.css">
  <link rel="stylesheet" href="src/css-globais/css/templates.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/gh/codeOpacity/op_icons@main/op_icons.all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="src/css/acessibilidade.css">
  <link rel="stylesheet" href="src/css/templates.css">

  <script defer src="src/js/acessibilidade.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="src/css/responssividade.css">


</head>

<body>
  <div id="vlibras">
    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="src/img/logo.png" alt="Logo" width="280" height="120" class="d-inline-block align-text-top" />
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Produtos e Planos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="planoseprodutos.php">Planos</a></li>
              <li><a class="dropdown-item" href="planoseprodutos.php">Produtos</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Recursos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#redes">Redes</a></li>
              <li><a class="dropdown-item" href="planoseprodutos.php">Modelos</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="faleconosco.php">Fale conosco</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#div-empresa">Sobre a empresa</a>
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

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row align-items-center mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">

          <h1 class="hero-title mb-4">Accelerating business growth through innovative technology</h1>

          <p class="hero-description mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.</p>

          <div class="cta-wrapper">
            <a href="#" class="btn btn-primary">Discover More</a>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="hero-image">
            <img src="src/img/inicio.svg" alt="Business Growth" class="img-fluid" loading="lazy">
          </div>
        </div>
      </div>

      <div class="row feature-boxes">
        <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-box">
            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
              </svg>
            </div>
            <div class="feature-content">
              <h3 class="feature-title">Sites Responsivos</h3>
              <p class="feature-text">Sites que se adaptam a qualquer dispositivo, proporcionando a melhor experiência ao usuário.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-box">
            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
              <i class="bi bi-window"></i>
            </div>
            <div class="feature-content">
              <h3 class="feature-title">Lojas Virtuais</h3>
              <p class="feature-text">Comércio eletrônico moderno com design atrativo e ferramentas para aumentar suas vendas.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="feature-box">
            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
              <i class="bi bi-headset"></i>
            </div>
            <div class="feature-content">
              <h3 class="feature-title">Otimização SEO</h3>
              <p class="feature-text">Melhoramos o posicionamento do seu site no Google e atraímos mais visitantes qualificados.</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section><!-- /Hero Section -->

  <br /><br /><br />
  <div class="oferecimento">
    <h1>Construa seu futuro no mundo virtual agora!</h1>
    <p>
      Crie um site e monte seu futuro desde do zero á vendas internacionais
    </p>

    <br /><br /><br />
    <div class="main">
      <div class="video1">
        <button class="botao" id="play"><span class="op-play"></span></button>

        <div class="modal" id="video1">
          <div class="modal_container">
            <span class="close" data-modal="video1">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="src/img/2025-03-21 16-24-0.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="video2">
        <button class="botao" id="play2">
          <span class="op-play"></span>
        </button>

        <div class="modal" id="video2">
          <div class="modal_container">
            <span class="close" data-modal="video2">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="src/img/2025-03-21 16-06-1.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br>


  <!-- Seção Serviços -->
  <section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2 class="text-center text-3xl md:text-4xl font-bold mb-12 text-black">Nossos Serviços</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row justify-content-center g-5">

        <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
          <div class="service-item">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-code" viewBox="0 0 16 16">
                <path d="M5.854 4.854a.5.5 0 1 0-.708-.708l-3.5 3.5a.5.5 0 0 0 0 .708l3.5 3.5a.5.5 0 0 0 .708-.708L2.707 8zm4.292 0a.5.5 0 0 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708-.708L13.293 8z" />
              </svg>
            </div>
            <div class="service-content">
              <h3>Sites Responsivos</h3>
              <p>Sites que se adaptam a qualquer dispositivo, proporcionando a melhor experiência ao usuário.</p>
              <a href="#" class="service-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
          <div class="service-item">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
              </svg>
            </div>
            <div class="service-content">
              <h3>Lojas Virtuais</h3>
              <p>Comércio eletrônico moderno com design atrativo e ferramentas para aumentar suas vendas.</p>
              <a href="#" class="service-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
          <div class="service-item">
            <div class="service-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z" />
              </svg>
            </div>
            <div class="service-content">
              <h3>Otimização SEO</h3>
              <p>Melhoramos o posicionamento do seu site no Google e atraímos mais visitantes qualificados.</p>
              <a href="#" class="service-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div><!-- End Service Item -->



      </div>

    </div>

  </section><!-- /Services Section -->


  <br><br>



  <!-- Planos -->
  <section id="planos" class="secao-planos">
    <div id="carouselExampleSlidesOnly" class="carousel-slide carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-content">
            <div class="carousel-text">
              <h2>Confira nossos planos</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam in doloribus pariatur possimus fugit fuga ratione optio quae ipsam autem soluta consequatur provident, debitis illo nemo ducimus, tenetur voluptatum numquam.</p>
              <br>

              <a href="planoseprodutos.php" class="link"><button class="botao-criar">Criar website</button></a>
            </div>
            <div class="carousel-image">
              <img src="src/img/planos.svg" alt="Imagem 1">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <!-- categorias -->
  <div class="categorias">
    <h1>
      Conheça as diferentes formas de você criar um site e suas categorias
    </h1>
    <p>
      Conheça as diferentes categorias que você pode escolher para começar a
      cronstruir seu próprio website
    </p>
  </div>

  <div class="categorias-sites">
    <div class="main2">
      <div class="video3">
        <div class="bg-button">
          <button class="botao" id="play3">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video3">
          <div class="modal_container">
            <span class="close" data-modal="video3">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="src/img/2024-11-29 16-43-52.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>

      <div class="video4">
        <div class="bg-button">
          <button class="botao" id="play4">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video4">
          <div class="modal_container">
            <span class="close" data-modal="video4">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="src/img/2024-11-29 19-46-56.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>

      <div class="video5">
        <div class="bg-button">
          <button class="botao" id="play5">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video5">
          <div class="modal_container">
            <span class="close" data-modal="video5">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="src/img/2024-11-29 16-43-52.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="descricao">
          <h1>Site dinâmico</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Dignissimos libero harum corporis porro laboriosam quibusdam
            consequatur nam iure sit perspiciatis consectetur officia enim
            repellendus asperiores, dolorem hic sint facere at!
          </p>
        </div>
      </div>
    </div>
  </div>

  <br />

  <div class="contato">
    <img src="src/img/comunidade.svg" alt="" />
    <h1>Venha ser parte de nossa comunidade e ficar por dentro de tudo!</h1>
    <form name="form1" id="form1" method="POST" action="comunidade_processa.php">
      <div class="name">
        <label for="name">Nome</label>
        <input type="text" name="nome_comunidade" id="firstname" placeholder="Seu nome na comunidade" required />
      </div>
      <div class="email">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" required />
      </div>
      <div class="tell">
        <label for="number">Celular</label>
        <input type="text" name="telefone_comunidade" id="number" placeholder="Celular com DDD (somente números)" required />
      </div>
      <div class="button-form">
        <button><a href="index.php" type="submit">Fazer parte</a></button>
      </div>
    </form>
  </div>


  <div class="div-empresa" id="div-empresa">
    <h1>Quem somos nós</h1>

    <div class="imagem-empresa">
      <img src="src/img/grupo.jpeg" alt="" />
    </div>
    <div class="apresentacao-empresa">
      <h1>Quem é a AuroraIT?</h1>
      <p>
        A Aurorability nasceu de um grupo de jovens estudantes, cada um com sua perspectiva única e experiências
        diversas. Unidos por um propósito comum, eles decidiram transformar o mundo digital em um espaço mais acessível
        e
        acolhedor para todos. As ideias inovadoras de cada um, combinadas com a paixão por criar um ambiente digital
        inclusivo, deram origem à Aurorability, uma empresa que busca fazer a diferença na vida de todos os usuários.
      </p>

      <a href="faleconosco.php"><button class="btn2">Fale conosco</button></a>
    </div>

    <div class="redes" id="redes">
      <h1>Nossas redes sociais</h1>
    </div>

    <div class="container3">
      <a href="#">
        <div data-text="Github" class="glass">
          <svq>
            <i class="bx bxl-github"></i>
          </svq>
        </div>
      </a>
      <a href="#">
        <div data-text="Instagram" class="glass">
          <svq><i class="bx bxl-instagram"></i></svq>
        </div>
      </a>
      <a href="#">
        <div data-text="Discord" class="glass">
          <svq><i class="bx bxl-discord-alt"></i></svq>
        </div>
      </a>
      <a href="#">
        <div data-text="WhatsApp" class="glass">
          <svq><i class="bx bxl-whatsapp"></i></svq>
        </div>
      </a>
    </div>
    <br><br><br><br><br>


    <h1>Conheça nossos projetos</h1>

    <!-- portfolio -->
    <div class="container2">
      <div class="portfolio">
        <a href="src/video/2025-05-28 06-14-40.mp4" class="card" target="_blank">
          <img src="src/img/projeto1.jpeg" alt="Projeto 1">
          <div class="card-content">
            <h2>Website Computação Quântica</h2>
            <p>Website que é a base de uma introdução aos conhecimentos sobre a computação quÂntica</p>
          </div>
        </a>

        <a href="https://www.exemplo.com/projeto2" class="card" target="_blank">
          <img src="src/img/projeto2.jpeg" alt="Projeto 2">
          <div class="card-content">
            <h2>Website de jogos</h2>
            <p>Website de desenvolvimento de jogos </p>
          </div>
        </a>
      </div>
    </div>

    <div class="hero-banner">
      <div class="content">
        <h1>Conheça um pouco<br>mais de nossa equipe</h1>
        <hr>
        <p class="subtitle">Aurora Ability IT</p>
        <br>
        <a href="sobreaempresa.php" class="link"><button class="botao-criar">Mais Sobre Nós</button></a>
      </div>
    </div>
  </div>
  </div>
  </div>


  <!-- Footer com logo -->
  <footer class="py-5 mt-5" style=" color: #fff;">
    <div class="container">
      <div class="row">

        <!-- Logo e descrição -->
        <div class="col-md-4 mb-4">
          <img src="src/img/logo.png" alt="Logo da Empresa" style="width: 250px; margin-bottom: 10px;">
          <p class="small">
            Criamos sites modernos e personalizados para empresas de todos os portes.
          </p>
        </div>

        <!-- Links úteis -->
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="src/js/main.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="src/js/inicio.js"></script>
  <script src="src/js/mod.js"></script>
</body>

</html>