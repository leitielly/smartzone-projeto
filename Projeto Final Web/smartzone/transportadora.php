<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TRANSPORTADORA</title>
    <link rel="icon" type="image/x-icon" href="assets/logo.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/global.css" rel="stylesheet" />
</head>

<body>

   <!--Menu de Navegação-->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">SMARTZONE</a>
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
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <!--Header da pagina principal-->

    <header class="bg-black py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">TRANSPORTADORA</h1>
                <p>Informações da transportadora.</p>
            </div>
        </div>
    </header>
    <br><br>

    <!--Conteúdo da página-->

    <div class="container">
        <div class="section" id="rastreamento-transportadora">
            <h2>Como Rastrear Seu Pedido com a Transportadora</h2>
            <div class="instructions">
                <p>Para rastrear seu pedido diretamente com a transportadora, siga os passos abaixo:</p>
                <ol>
                    <li>Faça login na sua conta.</li>
                    <li>Acesse a seção "Meus Pedidos".</li>
                    <li>Encontre o pedido que deseja rastrear e clique em "Rastrear Pedido".</li>
                    <li>Você será redirecionado para o site da transportadora com as informações de rastreamento.</li>
                </ol>
                <a class="btn btn-outline-dark mt-auto" href="login.php">Rastrear Pedido</a>
            </div>
        </div>
        <br>
        <div class="section" id="contato-transportadora">
            <h2>Como Contatar a Transportadora</h2>
            <div class="instructions">
                <p>Para entrar em contato com a transportadora, utilize as informações abaixo:</p>
                <ul>
                    <li><strong>Telefone:</strong> (11) 1234-5678</li>
                    <li><strong>Email:</strong> atendimento@transportadora.com.br</li>
                    <li><strong>Website:</strong> <a href="http://www.transportadora.com.br"
                            target="_blank">www.transportadora.com.br</a></li>
                </ul>
                <p>Você também pode utilizar o formulário de contato disponível no site da transportadora para solicitar
                    assistência.</p>
                <a class="btn btn-outline-dark mt-auto" href="http://www.transportadora.com.br/contato">
                    Formulário de Contato</a>
            </div>
        </div>
    </div>
    <br><br>

    </section>

    <!--Rodape da pagina principal-->

    <footer id="rede" class="text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            SMARTZONE
                        </h6>
                        <p>
                            A SmartZone é uma loja de informática que oferece uma ampla variedade de produtos
                            tecnológicos para consumidores e empresas.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Produtos</h6>
                        <p>
                            <a class="text-white" href="./produtos/amd.php">Hardware</a>
                        </p>
                        <p>
                            <a class="text-white" href="./produtos/teclado.php">Periféricos</a>
                        </p>
                        <p>
                            <a class="text-white" href="./produtos/desktop.php">Computadores</a>
                        </p>
                        <p>
                            <a class="text-white" href="./produtos/headset.php">Games</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Acesso Rápido
                        </h6>
                        <p>
                            <a class="text-white" href="login.php">Login</a>
                        </p>
                        <p>
                            <a class="text-white" href="cadastro.php">Cadastre-se</a>
                        </p>
                        <p>
                            <a class="text-white" href="seuspedidos.php">Pedidos</a>
                        </p>
                        <p>
                            <a class="text-white" href="sac.php">Suporte</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contato</h6>
                        <p><i class="fas fa-home mr-3"></i> Brasil, Brasília-DF</p>
                        <p><i class="fas fa-envelope mr-3"></i> smartzone@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> (61) 9999-0000</p>
                        <p><i class="fas fa-print mr-3"></i> (61) 9898-0000</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2024 Copyright:
                            <a class="text-white" href="#">Smartzone.com.br</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>
  
    <!--script-->

    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>