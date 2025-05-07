<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portifólio</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: #2d2d2d;
            font-family: Arial, sans-serif;
            color: white;
        }

        /* Navbar */
        .navbar {
            background-color: #1f1f1f;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            cursor: pointer;
            transition: color 0.3s;
        }

        .navbar ul li:hover {
            color: #00adb5;
        }

        /* Banner com imagem */
        .banner {
            position: relative;
            background-image: url('fundo.avif');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .banner-content {
            position: relative;
            z-index: 2;
        }

        .banner-content h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .banner-content p {
            font-size: 20px;
            color: #f1f1f1;
        }

        /* Seções */
        .section {
            margin: 80px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 10px;
        }

        .grid img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 4px;
        }

        .text {
            font-size: 32px;
            font-weight: bold;
            line-height: 1.3;
        }

        .text2 {
            display: flex;
            justify-content: center;
            font-size: 32px;
            font-weight: bold;
            line-height: 1.3;
        }

        .column {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-row {
            display: flex;
            gap: 15px;
            background-color: #1f1f1f;
            padding: 20px;
            border-radius: 8px;
        }

        .image-row img {
            width: 150px;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .portfolio-section {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            padding: 60px;
            justify-content: center;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 150px);
            grid-template-rows: repeat(2, 150px);
            gap: 10px;
        }

        .gallery img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
        }

        .text-content {
            max-width: 300px;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .client-info {
            margin-top: 30px;
            font-size: 14px;
        }

        .client-info span {
            display: block;
            margin-top: 5px;
        }

        .dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: red;
            border-radius: 50%;
            margin-right: 6px;
        }

        /* Infográfico */
        main.container {
            position: relative;
            width: 90vw;
            max-width: 700px;
            aspect-ratio: 1 / 1;
            margin: 60px auto;
        }

        .center-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 150px;
            height: 150px;
            transform: translate(-50%, -50%);
            background: none;
            border: 3px #fff solid;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .center-circle img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }


        .step {
            position: absolute;
            width: 200px;
            height: 200px;
            transform: translate(-50%, -50%);
        }

        .circle {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-shadow: 1px 1px 2px #000;
            background-color: #888;
        }

        .circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .circle p {
            z-index: 2;
            margin: 0;
            background-color: rgba(0, 0, 0, 0.4);
            width: 100%;
            text-align: center;
            padding: 5px 0;
            border-bottom-left-radius: 50%;
            border-bottom-right-radius: 50%;
        }

        .step1 .circle {
            background: #b35c33;
        }

        .step2 .circle {
            background: #9b4fc3;
        }

        .step3 .circle {
            background: #5e6bc3;
        }

        .step4 .circle {
            background: #3f88c5;
        }

        .step5 .circle {
            background: #57bb69;
        }

        .step6 .circle {
            background: #7cb342;
        }

        .step7 .circle {
            background: #e6a129;
        }

        .step1 {
            top: 80%;
            left: 32%;
        }

        .step2 {
            top: 80%;
            left: 70%;
        }

        .step3 {
            top: 60%;
            left: 95%;
        }

        .step4 {
            top: 25%;
            left: 85%;
        }

        .step5 {
            top: 10%;
            left: 50%;
        }

        .step6 {
            top: 25%;
            left: 15%;
        }

        .step7 {
            top: 60%;
            left: 5%;
        }

        @media (max-width: 500px) {
            .step {
                width: 120px;
                height: 120px;
            }

            .center-circle {
                width: 120px;
                height: 120px;
            }
        }

        .dividido {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 40px;
        }

        .galeria,
        .descricao {
            flex: 1;
        }

        .linha-divisoria {
            width: 100%;
            background-color: #000;
            /* cor clara semi-transparente */
            height: 2px;
            position: relative;
        }

        .especialidades {
            background: #413e3e;
        }

        .container2 {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border: 5px solid #2b2b2b;
        }

        .text-content2 {
            max-width: 300px;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            right: 200px;
            text-align: justify;
        }


        .right-image {
            position: absolute;
            right: 710px;
            bottom: -2050px;
            width: 250px;
            height: 200px;
            border: 5px solid #2b2b2b;
        }

        @media screen and (max-width: 768px) {
            .right-image {
                position: static;
                margin-top: 20px;
            }

        }

        /* documentador */
        .timeline-container {
            display: flex;
            flex-direction: column;
            gap: 40px;
            border-left: 3px solid #ff5f5f;
            padding-left: 20px;
            margin-left: 300px;

        }

        .timeline-card {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .timeline-card img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card-content h3 {
            margin: 0;
            font-size: 1.2em;
        }

        .card-content p {
            margin: 5px 0 0;
            color: #ccc;
        }

        .highlight-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .main-block {
            flex: 2;
            background: #1e1e1e;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .main-block img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .main-text {
            padding: 20px;
        }

        .side-grid-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .profile-photo {
            margin-bottom: 20px;
            text-align: center;
        }

        .profile-photo img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ff5f5f;
        }

        .profile-photo h4 {
            margin: 10px 0 0;
            font-size: 1em;
        }

        .profile-photo p {
            margin: 2px 0;
            color: #ccc;
            font-size: 0.9em;
        }

        .side-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            width: 100%;
        }

        .side-grid img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        .social-icon {
            color: #ff5f5f;
            font-size: 1.2em;
            margin-top: 5px;
        }

        /* Bloco da imagem no canto direito */
        .right-info2 {
            position: absolute;
            top: 150px;
            right: 600px;
            text-align: center;
            color: #fff;
            position: absolute;
            top: 3400px;
        }

        .right-info2 img {
            width: 200px;
            height: 200px;
            border-radius: 15px;
            object-fit: cover;
            border: 4px solid #ff5f5f;
        }

        .right-info2 h4 {
            margin: 10px 0 5px;
            font-size: 1.1em;
        }

        .right-info2 p {
            font-size: 0.95em;
            color: #ccc;
        }

        .container {
            display: flex;
            gap: 40px;
            padding: 60px;
        }

        /* Perfil */
        .profile {
            flex: 1;
            text-align: center;
            background-color: #2c2c2c;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(97, 218, 251, 0.2);
            max-height: 500px;
        }

        .profile img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            border: 3px solid #61dafb;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile h2 {
            margin: 0 0 5px;
            font-size: 1.4em;
        }

        .profile p {
            margin: 0;
            font-size: 0.95em;
            color: #aaa;
        }

        .profile .skills {
            margin-top: 20px;
            font-size: 0.9em;
            color: #bbb;
        }

        .skills span {
            display: inline-block;
            background: #333;
            padding: 6px 12px;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.85em;
        }

        /* Projetos */
        .projects {
            flex: 2;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .project-card {
            background-color: #2a2a2a;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .project-content {
            padding: 15px;
        }

        .project-content h4 {
            margin: 0 0 8px;
            color: #61dafb;
            font-size: 1.1em;
        }

        .project-content p {
            margin: 0;
            color: #ccc;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">Sobre a empresa</div>
        <ul>
            <a href="index.php">
                <li>Início</li>
            </a>
        </ul>
    </div>

    <div class="banner">
        <div class="banner-content">
            <h1>Conheça cada um de nós</h1>
            <p>desde especialidades, até contatos</p>
        </div>
    </div>

    <h1 class="text2">Conheça nossa equipe</h1>
    <main class="container">
        <section class="center-circle">
            <img src="./img/logo.png" alt="Infográfico 7 etapas">
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
</body>

</html>