

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Modelos por Plano</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .site-preview {
            height: 200px;
            border-radius: 10px;
            background-color: #fff;
            padding: 10px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            position: relative;
        }

        .header,
        .footer,
        .sidebar,
        .content,
        .box {
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .header:hover,
        .footer:hover,
        .sidebar:hover,
        .content:hover,
        .box:hover {
            transform: scale(1.02);
            outline: 2px dashed #007bff;
        }

        .header,
        .footer {
            height: 20px;
        }

        .sidebar {
            width: 20%;
            height: 100%;
        }

        .content {
            flex: 1;
        }

        .box {
            height: 40px;
        }

        .gradient-picker {
            position: absolute;
            display: flex;
            gap: 5px;
            margin-top: 5px;
            flex-wrap: wrap;
            z-index: 10;
        }

        .gradient-option {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            border: 2px solid #fff;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
        }

        .btn-saiba {
            margin-top: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .btn-saiba:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h2 class="text-center mb-5">Modelos de Sites por Plano</h2>
        <div class="row g-4">

            <!-- === PLANO BÁSICO === -->
            <div class="col-md-4">
                <div class="card p-3 text-center shadow-sm">
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
            <div class="col-md-4">
                <div class="card p-3 text-center shadow-sm">
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
            <div class="col-md-4">
                <div class="card p-3 text-center shadow-sm">
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


    <!-- Bootstrap + Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function setupForm(idForm, idMsg, plano) {
    const form = document.getElementById(idForm);
    const msg = document.getElementById(idMsg);

    form.addEventListener("submit", function (e) {
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