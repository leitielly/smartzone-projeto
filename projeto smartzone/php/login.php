<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <!-- login formulario -->
    <div class="container text-center mt-3 pt-5">
        <h1 class="form-weight-bold">Login do Cliente</h1>
        <hr class="mx-auto">
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
                    <input type="submit" name="submit"value="logar"class="btn">
                </div>
                <div class="esqueci_senha">
                    <a href="#"class="entrar-btn">Esqueceu a senha?</a>
                </div>
            </div>
            <p description="Não tem cadastro?" textlink="Cadastre-se" link="cadastro.php" class="ad">Não tem cadastro?
                <a href="cadastro.php" class="entrar-btn">Cadastre-se</a></p>
        </form>
    </div>

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
            header('location: perfil.php');
        } else {
            echo "Email ou senha incorretos!";
        }
        mysqli_close($conn);
    }
        ?> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>