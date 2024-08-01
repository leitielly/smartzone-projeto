<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>FALE CONOSCO</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/global.css" rel="stylesheet" />
</head>

<body>

    <!--Menu de Navegação-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">SMARTZONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="sac.php">FALE CONOSCO</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">ACESSE SUA CONTA</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="cadastro.php">CADASTRE-SE</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="login.php">LOGIN</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!--Header da pagina principal-->


    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">ATENDIMENTO AO CLIENTE</h1>
                <p>Caso deseje nos contactar preencha o formulário ou então toque no ícone do Whatsapp ao lado para
                    conversar com nossos atendentes! </p>
            </div>
        </div>
    </header>

    <!--formulario-->

    <div class="formulario">
        <div class="contact-form">
            <h2>Contato SAC</h2>
            <form action="processa_contato.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <label for="mensagem">Descreva sua dúvida:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!--Link whatsapp-->
    <a href="https://api.whatsapp.com/send?phone=551234567890" class="whatsapp-float" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>

    <!-- Link para o Font Awesome para usar o ícone do WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Cards soluções rapidas-->

    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Soluções Rápidas</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/pacote encomenda.png" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Seus pedidos</h5>
                                <p>
                                    Rastrear ou cancelar seus pedidos.
                                </p>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Clique Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Card 2-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/cartao de credito.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Pagamento</h5>

                                <p>
                                    Adicionar ou alterar forma de pagamento.
                                </p>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Clique Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Card 3-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/transportadora.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Transportadora</h5>

                                <p>
                                    Informações da transportadora.
                                </p>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Clique Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Card 4-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/teste.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Suporte Técnico</h5>

                                <p>
                                    Segunda à sexta das 8:00 às 20:00, sábado das 09:00 às 15:00.
                                </p>

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Clique Aqui</a>
                            </div>
                        </div>
                    </div>
                </div>

    </section>

    <!--Rodape da pagina principal-->

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">SmartZone &copy; SmartZone 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>