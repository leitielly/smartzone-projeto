<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cadlog.css">
    <title>Login</title>
</head>
<body>
    <!--Menu de Navegação-->
    <section>
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
                            <li><a class="dropdown-item" href="">LOGIN</a></li>
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
</section>
    <br><br>
    <br><br>
    <br><br>



    <!-- login formulario -->
        <div class="container text-center mt-3 pt-5">
            <h1 class="form-weight-bold">Login do Cliente</h1>
            <hr id="traco"class="mx-auto">
    </div>
    <div class="mx-auto container">
        <form id="login-form"  action="" method="post">
            <div class="form_grupo">
                <label>Email</label>  <i class="fa-solid fa-envelope"></i><br>
            </i><input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"required>
        </div>
        <div class="form_grupo">
            <label>Senha</label>  <i class="fa-solid fa-lock-open"></i><br>
            <input type="password" name="senha" class="form_input" id="senha" placeholder="Rafael32@a" required>
            <div class="form_grupo">
                <input type="submit" name="submit"value="logar"class="ntb">
            </div>
            <div class="esqueci_senha">
                <a href="#"class="entrar-btn">Esqueceu a senha?</a>
            </div>
        </div>
        <p description="Não tem cadastro?" textlink="Cadastre-se" link="cadastro.php" class="ad">Não tem cadastro?
            <a href="cadastro.php" class="entrar-btn">Cadastre-se</a></p>
        </form>
    </div>

    <br><br>
    <br><br>
    <br><br>
   


    <!-- validando login -->
    <?php
    session_start();
    include_once 'conexao.php';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $dados = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $dados['email'];
            $_SESSION['senha'] = $dados['senha'];
            header('location: account.html');
        } else {
            echo "<h7>Email ou senha incorretos!</h7>";
        }
        mysqli_close($conn);
    }
        ?> 



    <!-- footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">SmartZone &copy; SmartZone 2024</p>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>