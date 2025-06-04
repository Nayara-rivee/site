<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link rel="stylesheet" href="../css/Faleconosco.css">
  <link rel="stylesheet" href="../css-globais/css/rodape.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="../css-globais/css/templates.css">


</head>

<body>
  <div class="site-wrapper">

    <div class="wrapper">
      <section class="contact-section">
        <h2 class="section-title">Fale Conosco</h2>

        <div class="contact-page container grid">
          <!-- Contact Section -->
          <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
              <h2>Contact</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="info-card">
                    <div class="icon-box">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <h3>Our Address</h3>
                    <p>2847 Rainbow Road, Springfield, IL 62701, USA</p>
                  </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="info-card">
                    <div class="icon-box">
                      <i class="bi bi-telephone"></i>
                    </div>
                    <h3>Contact Number</h3>
                    <p>Mobile: +1 (555) 123-4567<br>
                      Email: info@example.com</p>
                  </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="info-card">
                    <div class="icon-box">
                      <i class="bi bi-clock"></i>
                    </div>
                    <h3>Opening Hour</h3>
                    <p>Monday - Saturday: 9:00 - 18:00<br>
                      Sunday: Closed</p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                          </div>
                        </div>
                        <div class="col-md-6 form-group">
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row mt-3">
                        <div class="col-md-6 form-group">
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                          </div>
                        </div>
                        <div class="col-md-6 form-group">
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-list"></i></span>
                            <select name="subject" class="form-control" required="">
                              <option value="">Select service*</option>
                              <option value="Service 1">Consulting</option>
                              <option value="Service 2">Development</option>
                              <option value="Service 3">Marketing</option>
                              <option value="Service 4">Support</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                            <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                          </div>
                        </div>
                        <div class="text-center button">
                          <button type="submit">Submit Message</button>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>

              </div>

            </div>
          </section>
          <!-- /Contact Section -->

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
      <img src="../img/espaco.svg" alt="">
    </div>
    <h5 class="agradecimento">Muito obrigado por nos acompanhar!</h5>
    <button class="voltar"><a href="index.php">voltar para o início</a></button>
    
  </div>

  
  <footer class="py-5 mt-5" style=" color: #fff;">
    <div class="container3">
      <div class="row">
        <!-- Logo -->
        <div class="col-md-4 mb-4">
          <img src="../img/logo.png" alt="Logo da Empresa" style="width: 250px; margin-bottom: 10px;">
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


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>


  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>


</html>