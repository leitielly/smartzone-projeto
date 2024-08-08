<?php
session_start();
include_once('conexao.php');
//Verifica se o usuario esta logado
if(isset($_SESSION['email'])){
  header('Location: account.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
        <link href="css/global.css" rel="stylesheet" />
    <link href="css/cadlog.css" rel="stylesheet" />
    <title>Cadastro</title>
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


    <!-- cadastro formulario -->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h1 class="form-weight-bold">Crie seu Cadastro</h1>
            <hr id="traco" class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="login-form" action="processa.php" method="post">
              <!-- Mensagem de erro ou sucesso -->
               <?php
               if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
              }
              ?>
              <p style="color:red;"><?php if(isset($_GET['error'])){ echo $_GET['error'];}?></p>
                <div class="form_grupo">
                    <label>Nome Completo</label><br>
                    <i class="fa-solid fa-user"></i> <input type="text" name="nome" class="form_input" id="nome"
                        placeholder="Nome" required>
                </div>

                <div class="form_grupo">
                    <label>Email</label><br>
                    <i class="fa-solid fa-envelope"></i> <input type="email" name="email" class="form_input" id="email"
                        placeholder="seuemail@email.com" required>
                </div>

                <div class="form_grupo">
                    <label>Data de Nascimento</label><br>
                    <i class="fa-solid fa-calendar"></i> <input type="date" name="datanascimento" class="form_input"
                        id="datanascimento" placeholder="__/__/____" required>
                </div>
                <div class="form_grupo">
                    <label>CPF</label><br>
                    <i class="fa-solid fa-lock"></i> <input type="numero" name="cpf" class="form_input" id="cpf"
                        placeholder="___.___.___-__" required>
                </div>
                <div class="form_grupo">
                    <label>Sexo:</label><br>
                    <i class="fa-solid fa-venus-mars"></i> <select id="sexo" name="sexo">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Näo informar</option>
                    </select>
                </div>

                <div class="form_grupo">
                    <label>Telefone</label><br>
                    <i class="fa-solid fa-phone"></i> <input type="numero" name="telefone" class="form_input"
                        id="phone_with_ddd" placeholder="(__) _____-____" required>
                </div>
                <div class="form_grupo">
                    <label>Endereço</label><br>
                    <i class="fa-solid fa-map-location-dot"></i> <input type="text" name="endereco" class="form_input"
                        id="endereco" placeholder="digite seu Endereço" required>
                </div>
                <div class="form_grupo">
                    <label>CEP</label><br>
                    <i class="fa-solid fa-location-dot"></i> <input type="numero" name="cep" class="form_input"
                        id="cep" placeholder="00000-000" required>
                </div>

                <div class="form_grupo">
                    <label>Senha</label><br>
                    <i class="fa-solid fa-lock"></i> <input id="senha" class="senha"
                        description="precisa ter entre 6 e 20 caracteres" type="password" minlength="6" maxlength="20"
                        cursor="pointer" name="senha" required="" label="[object Object]">
                </div>
                <div class="submit">
                    <input type="hidden" name="acao" value="enviar">
                    <button type="submit" name="Submit" class="ntb"> Criar Cadastro</button>
                </div>
                <p description="já tem cadastro?" textlink="entrar" link="login.php" class="ad">já tem cadastro?<a
                        href="login.php" class="entrar-btn">entrar</a></p>
            </form>
        </div>
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
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

        <script>
           $('#cpf').mask('000.000.000-00', {reverse: true});
           $('#phone_with_ddd').mask('(00) 0000-0000');
           $('#cep').mask('00000-000');
           
        </script>
</body>

</html>