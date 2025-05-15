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
  <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/responsive.css">


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
            <a class="nav-link active" aria-current="page" href="#div-empresa">Sobre a embresa</a>
          </li>
          <?php if ($usuarioLogado): ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="cliente.php">Minha conta</a>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
    <!-- <div class="button">
      <div class="ball"></div>
    </div> -->
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
        Monte seu prórpio website e ingresse no mundo da tecnologia sem litimes
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
    <div class="container">
      <h2 class="text-center text-3xl md:text-4xl font-bold mb-12 text-black">Nossos Serviços</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="bg-escuro p-5 rounded-lg shadow hover:bg-roxo transition-all">
            <h3 class="text-xl font-bold mb-2">Sites Responsivos</h3>
            <p>Sites que se adaptam a qualquer dispositivo, proporcionando a melhor experiência ao usuário.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-escuro p-5 rounded-lg shadow hover:bg-roxo transition-all">
            <h3 class="text-xl font-bold mb-2">Lojas Virtuais</h3>
            <p>Comércio eletrônico moderno com design atrativo e ferramentas para aumentar suas vendas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-escuro p-5 rounded-lg shadow hover:bg-roxo transition-all">
            <h3 class="text-xl font-bold mb-2">Otimização SEO</h3>
            <p>Melhoramos o posicionamento do seu site no Google e atraímos mais visitantes qualificados.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="servicos" class="secao-servicos">
    <h3 class="titulo-secao">Nossos Serviços</h3>
    <div class="grid-servicos">
      <div class="servico">
        <h4 class="titulo-servico">🚀 Criação de Sites Profissionais</h4>
        <p>Sites rápidos, seguros e adaptáveis a qualquer dispositivo.</p>
      </div>
      <div class="servico">
        <h4 class="titulo-servico">🎨 Design Responsivo</h4>
        <p>Layout moderno e exclusivo para sua marca se destacar.</p>
      </div>
      <div class="servico">
        <h4 class="titulo-servico">🔗 Integração com redes sociais</h4>
        <p>Conecte seu site com Instagram, WhatsApp, Facebook e mais.</p>
      </div>
      <div class="servico">
        <h4 class="titulo-servico">🛠 Suporte Técnico</h4>
        <p>Acompanhamento e manutenção para que tudo funcione bem sempre.</p>
      </div>
    </div>
  </section> -->
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

    <!-- 
    <h1>Conheça a equipe</h1> -->

    <h1>Conheça nossos projetos</h1>

    <!-- participantes -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Slide 1
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa1.jpeg" alt="...">
          </div>
          <h3>Nayara</h3>
          <p class="role">Programadora</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
 -->
        <!-- Slide 2
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa2.jpeg" alt="...">
          </div>
          <h3>Iza</h3>
          <p class="role">Design</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
 -->
        <!-- Slide 3 
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa3.jpeg" alt="...">
          </div>
          <h3>Maria Eduarda</h3>
          <p class="role">Documentadora</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
-->
        <!-- Slide 4 
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa4.jpeg" alt="...">
          </div>
          <h3>Aline Hosen</h3>
          <p class="role">Social Mídia</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
-->
        <!-- Slide 5
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa5.jpeg" alt="...">
          </div>
          <h3>Nickolas</h3>
          <p class="role">Programador</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
 -->
        <!-- Slide 6
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa6.jpeg" alt="...">
          </div>
          <h3>Bruno</h3>
          <p class="role">Design</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
 -->
        <!-- Slide 7 
        <div class="swiper-slide membro">
          <div class="foto">
            <img src="./img/pessoa7.jpeg" alt="...">
          </div>
          <h3>Allana</h3>
          <p class="role">Documentadora e Analista de Software</p>
          <p class="description">
            olá. sou programadora
          </p>
          <div class="media-icons2">
            <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>
-->
      </div>

      <!-- Setas de navegação 
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
-->
      <!-- Paginação (bolinhas) 
      <div class="swiper-pagination"></div>
      -->
    </div>

    <!-- portfolio -->
    <div class="container2">
      <div class="portfolio">
        <a href="https://www.exemplo.com/projeto1" class="card" target="_blank">
          <img src="./img/projeto1.jpeg" alt="Projeto 1">
          <div class="card-content">
            <h2>Consultoria de TI</h2>
            <p>Oferecendo soluções estratégicas de TI para empresas de todos os portes.</p>
          </div>
        </a>

        <a href="https://www.exemplo.com/projeto2" class="card" target="_blank">
          <img src="./img/projeto2.jpeg" alt="Projeto 2">
          <div class="card-content">
            <h2>Website de E-commerce</h2>
            <p>Desenvolvimento de loja online customizada e otimizada para vendas.</p>
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

  <footer class="rodape" id="contato">
    <div class="rodape-div">
      <div class="rodape-div-1">
        <div class="flex-1 mb-6">
          <img src="img/logo.png" alt="..." />
          <p class="text-muted-foreground">
            Join our newsletter to stay up to date on features and releases.
          </p>
          <div class="flex mt-4">
            <input type="email" placeholder="Enter your email" class="border border-border rounded-l-md p-2 flex-1" />
            <button class="bg-primary text-primary-foreground rounded-r-md p-2">
              Subscribe
            </button>
          </div>
        </div>
      </div>

      <div class="rodape-div-2">
        <div class="rodape-div-2-coluna">
          <!-- elemento -->
          <span><b>Contatos</b></span>
          <p>contato@na.na</p>
          <p>+55 63 99200-0000</p>
        </div>
      </div>

      <div class="rodape-div-3">
        <div class="rodape-div-3-coluna">
          <!-- elemento -->
          <span><b>Links</b></span>
          <p><a href="#servicos">Serviços</a></p>
          <p><a href="#empresa">Empresa</a></p>
          <p><a href="#sobre">Sobre</a></p>
        </div>
      </div>

      <div class="rodape-div-4">
        <div class="rodape-div-4-coluna">
          <!-- elemento -->
          <span><b>Outros</b></span>
          <p>Políticas de Privacidade</p>
        </div>
      </div>
    </div>
    <p class="rodape-direitos">Informações sobre o site</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="./js/inicio.js"></script>
  <script src="./js/mod.js"></script>
</body>

</html>