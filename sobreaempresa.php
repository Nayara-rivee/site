<?php
session_start();
$usuarioLogado = isset($_SESSION['email']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portifólio</title>
    <link rel="stylesheet" href="./css/Sobreaempresa.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="./img/logo2.png" alt="Logo" width="280" height="120" class="d-inline-block align-text-top" />
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

    <div class="banner">
        <div class="banner-content">
            <h1 class="text-white">Conheça cada um de nós</h1>
            <p>desde especialidades, até contatos</p>
        </div>
    </div>

    <h1 class="text2">Conheça nossa equipe</h1>
    <main class="container-principal">
        <section class="center-circle">
            <img src="./img/logo2.png" alt="Infográfico 7 etapas">
        </section>
        <section class="step step1">
            <div class="circle"><img src="./img/pessoa1.jpeg" alt="Pessoa 1" />
                <p>PROGRAMADORA</p>
            </div>
        </section>
        <section class="step step2">
            <div class="circle"><img src="./img/pessoa2.jpeg" alt="Pessoa 2" />
                <p>DESIGN</p>
            </div>
        </section>
        <section class="step step3">
            <div class="circle"><img src="./img/pessoa3.jpeg" alt="Pessoa 3" />
                <p>DOCUMENTADORA</p>
            </div>
        </section>
        <section class="step step4">
            <div class="circle"><img src="./img/pessoa4.jpeg" alt="Pessoa 4" />
                <p>SOCIAL-MÍDIA</p>
            </div>
        </section>
        <section class="step step5">
            <div class="circle"><img src="./img/pessoa5.jpeg" alt="Pessoa 5" />
                <p>PROGRAMADOR</p>
            </div>
        </section>
        <section class="step step6">
            <div class="circle"><img src="./img/pessoa6.jpeg" alt="Pessoa 6" />
                <p>DESIGN</p>
            </div>
        </section>
        <section class="step step7">
            <div class="circle"><img src="./img/pessoa7.jpeg" alt="Pessoa 7" />
                <p>ANALISTA-SOFTWARE</p>
            </div>
        </section>
    </main>
    <div class="especialidades">
        <div class="text2">
            <h1>Nossas Especialidades</h1>
        </div>

        <!-- Seção 1: Gestão de Redes Sociais -->
        <div class="section">
            <div class="grid">
                <img src="imagem1.jpeg" alt="">
                <img src="imagem3.jpeg" alt="">
                <img src="imagem2.jpeg" alt="">
                <img src="imagem2.jpeg" alt="">
                <img src="imagem1.jpeg" alt="">
                <img src="imagem3.jpeg" alt="">
                <img src="imagem1.jpeg" alt="">
                <img src="imagem2.jpeg" alt="">
                <img src="imagem3.jpeg" alt="">
            </div>
            <div class="text">GESTÃO DE REDES<br>SOCIAIS</div>
        </div>
        <div class="portfolio-section">
            <div class="gallery">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
            </div>
            <div class="text-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam molestie vitae nisl consequat
                    tempor.
                    Donec at facilisis ligula. Fusce gravida ante bibendum tellus consequat. In consectetur nisl
                    vestibulum,
                    malesuada et tincidunt justo.</p>
                <div class="client-info">
                    <strong>CLIENTE: LOJA FAUSTINO</strong>
                    <br>
                    </span>@GRANDESITE</span>
                </div>
            </div>
        </div>
        <br>
        <div class="linha-divisoria"></div>
        <br>
        <!-- Seção 2: Design Gráfico -->
        <div class="container2">
            <div class="text">DESIGN GRÁFICO</div>
            <img class="main-image" src="./img/faleconosco.jpeg" alt="Trabalho de design">
            <div class="text-content2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam molestie vitae nisl consequat
                    tempor.
                    Donec at facilisis ligula. Fusce gravida ante bibendum tellus consequat. In consectetur nisl
                    vestibulum,
                    malesuada et tincidunt justo.</p>
                <div class="client-info">
                    <strong>CLIENTE: LOJA FAUSTINO</strong>
                    <br>
                    </span>@GRANDESITE</span>
                </div>
            </div>
            <img class="right-image" src="./img/pessoa2.jpeg" alt="Cliente">
        </div>

        <br>
        <div class="linha-divisoria"></div>
        <br><br>
        <div class="documentador">
            <!-- Layout 1 - Linha do Tempo Vertical -->
            <div class="timeline-container">
                <div class="timeline-card">
                    <img src="imagem1.jpg" alt="Etapa 1">
                    <div class="card-content">
                        <h3>Briefing</h3>
                        <p>Coletamos todas as informações e necessidades do cliente.</p>
                    </div>
                </div>

                <div class="timeline-card">
                    <img src="imagem2.jpg" alt="Etapa 2">
                    <div class="card-content">
                        <h3>Planejamento</h3>
                        <p>Desenhamos a estratégia de conteúdo e cronograma de ações.</p>
                    </div>
                </div>

                <div class="timeline-card">
                    <img src="imagem3.jpg" alt="Etapa 3">
                    <div class="card-content">
                        <h3>Execução</h3>
                        <p>Produzimos o conteúdo visual e textual e aplicamos nas redes.</p>
                    </div>
                </div>
            </div>
            <div class="right-info2">
                <img src="./img/pessoa3.jpeg" alt="Lugar" />
                <h4>Nome do Lugar</h4>
                <p>@nomedoinstagram</p>
            </div>
        </div>
        <br>
        <div class="linha-divisoria"></div>
        <br><br>
        <!-- programador -->
        <div class="programador">
            <div class="container">
                <!-- Perfil -->
                <div class="profile">
                    <img src="../img/pessoa1.jpeg" alt="Foto do Programador">
                    <h2>João Dev</h2>
                    <p>@joaodev</p>
                    <div class="skills">
                        <h4>Skills:</h4>
                        <span>React</span>
                        <span>Node.js</span>
                        <span>TypeScript</span>
                        <span>MongoDB</span>
                        <span>Docker</span>
                    </div>
                </div>

                <!-- Projetos -->
                <div class="projects">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/300x150" alt="Projeto 1">
                        <div class="project-content">
                            <h4>Dashboard Admin</h4>
                            <p>Painel completo com autenticação e gráficos em tempo real.</p>
                        </div>
                    </div>

                    <div class="project-card">
                        <img src="https://via.placeholder.com/300x150" alt="Projeto 2">
                        <div class="project-content">
                            <h4>API REST Node</h4>
                            <p>API RESTful com JWT, CRUD completo e documentação Swagger.</p>
                        </div>
                    </div>

                    <div class="project-card">
                        <img src="https://via.placeholder.com/300x150" alt="Projeto 3">
                        <div class="project-content">
                            <h4>Site Portfólio</h4>
                            <p>Landing page pessoal responsiva com animações modernas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- Perfil -->
                <div class="profile">
                    <img src="../img/pessoa5.jpeg" alt="Foto do Programador">
                    <h2>João Dev</h2>
                    <p>@joaodev</p>
                    <div class="skills">
                        <h4>Skills:</h4>
                        <span>React</span>
                        <span>Node.js</span>
                        <span>TypeScript</span>
                        <span>MongoDB</span>
                        <span>Docker</span>
                    </div>
                </div>

                <!-- Projetos -->
                <div class="projects">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/300x150" alt="Projeto 1">
                        <div class="project-content">
                            <h4>Dashboard Admin</h4>
                            <p>Painel completo com autenticação e gráficos em tempo real.</p>
                        </div>
                    </div>

                    <div class="project-card">
                        <img src="https://via.placeholder.com/300x150" alt="Projeto 2">
                        <div class="project-content">
                            <h4>API REST Node</h4>
                            <p>API RESTful com JWT, CRUD completo e documentação Swagger.</p>
                        </div>
                    </div>

                    <div class="project-card">
                        <img src="https://via.placeholder.com/300x150" alt="Projeto 3">
                        <div class="project-content">
                            <h4>Site Portfólio</h4>
                            <p>Landing page pessoal responsiva com animações modernas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="linha-divisoria"></div>
        <br><br>
        <div class="column">
            <div class="title">ANALISTA DE SOFTWARE</div>
            <div class="image-row">
                <img src="imagem1.jpeg" alt="img1">
                <img src="imagem2.jpeg" alt="img2">
                <img src="imagem3.jpeg" alt="img3">
            </div>
        </div>
        <div class="portfolio-section">
            <div class="gallery">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
                <img src="https://via.placeholder.com/150" alt="">
            </div>
            <div class="text-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam molestie vitae nisl consequat
                    tempor.
                    Donec at facilisis ligula. Fusce gravida ante bibendum tellus consequat. In consectetur nisl
                    vestibulum,
                    malesuada et tincidunt justo.</p>
                <div class="client-info">
                    <strong>CLIENTE: LOJA FAUSTINO</strong>
                    <br>
                    </span>@GRANDESITE</span>
                </div>
            </div>
        </div>
        
    </div>
    <script src="./js/mod.js"></script>
</body>

</html>