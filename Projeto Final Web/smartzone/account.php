<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/global.css" rel="stylesheet" />
    <link href="css/cadlog.css" rel="stylesheet" />
    
    <title>Document</title>
</head>
</style>
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


    <!--Conta-->
  <section class="my-5 py-5">
  <?php
session_start();
include_once('conexao.php');

// Verifica se o usuário está tentando fazer logout
if (isset($_GET['logout']) && $_GET['logout'] == '1') {
    // Destroi todas as variáveis da sessão
    $_SESSION = array();

    // Se usar cookies para a sessão, também os limpa
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Destroi a sessão
    session_destroy();

    // Redireciona para a página de login
    header('Location: login.php');
    exit();
}

// Verifica se o usuário está logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$email = $_SESSION['email'];

// Prepara a consulta para evitar SQL Injection
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row_user = $result->fetch_assoc();
    echo "<div class='row container mx-auto'>";
    echo "<div class='text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12'>";
    echo "<h1 class='font-weight-bold'>Informação da conta</h1>";
    echo "<hr id='traco' class='mx-auto'>";
    echo "<div class='account-info'>";
    echo "<p>Nome completo: " . htmlspecialchars($row_user['nome']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($row_user['email']) . "</p>";
    echo "<p>Endereço: " . htmlspecialchars($row_user['endereco']) . "</p>";
    echo "<p><a href='#orders' id='pedidos-btn'>Seus Pedidos</a></p>";
    echo "<p><a href='account.php?logout=1' id='logout-btn'>Logout</a></p>";
    echo "<p><a href='edit_usuario.php?id=" . htmlspecialchars($row_user['id']) . "' style='color: #fb774b; text-decoration: none;'>Editar</a></p>";
    echo "</div>";
    echo "</div>";
} else {
    echo "<p>Usuário não encontrado.</p>";
}

$stmt->close();
mysqli_close($conn);
?>

            <div class="col-lg-6 col-md-12 col-sm-12" >
                <form id="account-form" method="post">
                    <h1>Altere a senha</h1>
                    <hr id="traco" class="mx-auto">
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="conta-senha" placeholder="senha"name="senha">
                    </div>
                    <div class="form-group">
                        <label for="senha">Confirme a Senha</label>
                        <input type="password" class="form-control" id="conta-senha-confirma" placeholder="senha"name="confirmSenha">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="mudar a senha" class="ntb" id="mudar-senha-btn">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--Orders-->
    <section  id="orders"class="orders container my-5 py-3">
      <div class="container mt-2">
        <h1 class="font-weight-bolde text-center">Seus Pedidos</h1>
        <hr id="traco" class="mx-auto">
      </div>

      <table class="mt-5 pt-5">
        <tr>
          <th>Produtos</th>
          <th>Data</th>
        </tr>
        <tr>
          <td>
            <div class="product-info">
              <img src="assets/headset rosa.jpg">
              <div>
                <p class="mt-3">Headset rosa</p>
              </div>
            </div>
          </td>

          <td>
            <span>2036-5-8</span>
          </td>

        </tr>
      </table>
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
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>