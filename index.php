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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/home.css" />
  <link rel="stylesheet" href="./css/baner.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/gh/codeOpacity/op_icons@main/op_icons.all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="./css/acessibilidade.css">
  <script defer src="./js/acessibilidade.js"></script>

  <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/responssividade.css">


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
  <div class="introducao">

    <div class="texto">
      <h1>Crie seu prórpio website e comece no mundo da tecnologia hoje</h1>
      <p>
        Monte seu prórpio website e ingresse no mundo da tecnologia sem limites
      </p>
      <a href="planoseprodutos.php" class="link"><button class="botao-criar">Criar website</button></a>
    </div>
    <div class="img-introducao">
      <img src="./img/undraw_designer_efwz.svg" alt="" />
    </div>
  </div>
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
              <iframe width="560" height="315" src="./img/2025-03-21 16-24-0.mp4" title="YouTube video player"
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
              <iframe width="560" height="315" src="./img/2025-03-21 16-06-1.mp4" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>


  <!-- Seção Serviços -->
  <section class="servicos py-36 bg-white text-white">
    <div class="container" id="servicos">
      <h2 class="text-center text-3xl md:text-4xl font-bold mb-12 text-black">Nossos Serviços</h2>
      <div class="row g-4">
        <div class="servico1 col-md-4">
          <div class="servico1-texts bg-escuro p-5 rounded-lg shadow hover:bg-roxo transition-all">
            <h3 class="fs-4 font-bold mb-2">Sites Responsivos</h3>
            <p>Sites que se adaptam a qualquer dispositivo, proporcionando a melhor experiência ao usuário.</p>
          </div>
        </div>
        <div class="servico2 col-md-4">
          <div class="servico2-texts bg-escuro p-5 rounded-lg shadow hover:bg-roxo transition-all">
            <h3 class=" text-xl font-bold mb-2">Lojas Virtuais</h3>
            <p>Comércio eletrônico moderno com design atrativo e ferramentas para aumentar suas vendas.</p>
          </div>
        </div>
        <div class="servico3 col-md-4">
          <div class="servico3-texts bg-escuro p-5 rounded-lg shadow hover:bg-roxo transition-all">
            <h3 class="text-xl font-bold mb-2">Otimização SEO</h3>
            <p>Melhoramos o posicionamento do seu site no Google e atraímos mais visitantes qualificados.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br><br><br><br><br><br><br><br><br><br><br><br>



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
              <img src="./img/planos.svg" alt="Imagem 1">
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
              <iframe width="560" height="315" src="./img/2024-11-29 16-43-52.mp4" title="YouTube video player"
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
              <iframe width="560" height="315" src="./img/2024-11-29 19-46-56.mp4" title="YouTube video player"
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
              <iframe width="560" height="315" src="./img/2024-11-29 16-43-52.mp4" title="YouTube video player"
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

      <div class="video6">
        <div class="bg-button">
          <button class="botao" id="play6">
            <span class="op-play"></span>
          </button>
        </div>
        <div class="modal" id="video6">
          <div class="modal_container">
            <span class="close" data-modal="video6">&times;</span>
            <div class="iframe_container">
              <iframe width="560" height="315" src="./img/2024-11-29 19-46-56.mp4" title="YouTube video player"
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
  <div class="borda-gradiente">
    <div class="contato">
      <img src="./img/comunidade.svg" alt="" />
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
  </div>

  <div class="div-empresa" id="div-empresa">
    <h1>Quem somos nós</h1>

    <div class="imagem-empresa">
      <img src="./img/grupo.jpeg" alt="" />
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
        <a href="./video/2025-05-28 06-14-40.mp4" class="card" target="_blank">
          <img src="./img/projeto1.jpeg" alt="Projeto 1">
          <div class="card-content">
            <h2>Website Computação Quântica</h2>
            <p>Website que é a base de uma introdução aos conhecimentos sobre a computação quÂntica</p>
          </div>
        </a>

        <a href="https://www.exemplo.com/projeto2" class="card" target="_blank">
          <img src="./img/projeto2.jpeg" alt="Projeto 2">
          <div class="card-content">
            <h2>Website de jogos</h2>
            <p>Website de desenvolvimento de jogos </p>
          </div>
        </a>
      </div>
    </div>

    <div class="hero">
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
          <img src="./img/logo.png" alt="Logo da Empresa" style="width: 250px; margin-bottom: 10px;">
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

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="./js/inicio.js"></script>
  <script src="./js/mod.js"></script>
</body>

</html>