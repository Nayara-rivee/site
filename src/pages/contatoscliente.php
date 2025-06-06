<!DOCTYPE html>

<html lang="pt-br" dir="ltr">

<head>
    <meta charset="UTF-8">


    <title> documento</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/areacliente.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-primary bg-dark">
        <div>
            <a href="src/pages/index.php"><button class="voltar" type="submit">home</button></a>
        </div>
        <div class="container-fluid">
            <a class="navbar-brand" href="src/pages/index.php"><b class="text-white">AuroraIT</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


            </div>
        </div>
    </nav>

    <main class="flex-fill">
        <div class="container">
            <h1 class="text-white">Minha Conta</h1>
            <div class="row gx-3 menu-lateral ">
                <div class="col-4 ">
                    <div class="list-group">
                        <a href="src/pages/dadoscliente.php" class="list-group-item list-group-item-actiontext-light">
                            <i class='bx bx-user'></i> Dados Pessoais
                        </a>
                        <a href="src/pages/dadoscliente.php" class="list-group-item list-group-item-action bg-danger text-light">
                            <i class='bx bx-user'></i> Contatos
                        </a>
                        <a href="src/pages/enderecocliente.php" class="list-group-item list-group-item-action">
                            <i class='bx bx-home'></i> Endereço
                        </a>
                        <a href="src/pages/pedidoscliente.php" class="list-group-item list-group-item-action">
                            <i class='bx bxs-truck'></i> Pedidos
                        </a>
                        <a href="src/pages/planoscliente.php" class="list-group-item list-group-item-action">
                            <i class='bx bx-heart'></i> Planos
                        </a>
                        <a href="src/pages/senha.php" class="list-group-item list-group-item-action">
                            <i class='bx bx-lock-alt'></i> Alterar Senha
                        </a>
                        <a href="src/pages/login.php" class="list-group-item list-group-item-action">
                            <i class='bx bxs-door-open'></i> Sair
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </main>


</body>

</html>