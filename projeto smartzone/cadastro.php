<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cadlog.css">
    <title>Cadastro</title>
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
                    <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <!-- cadastro formulario -->
     <section class="my-5 py-5">
         <div class="container text-center mt-3 pt-5">
             <h1 class="form-weight-bold">Crie seu Cadastro</h1>
             <hr id="traco" class="mx-auto">
            </div>
            <div class="mx-auto container">
            <form id="login-form" action="processa.php" method="post">
                 <div class="form_grupo">
                     <label>Nome Completo</label><br>
                     <i class="fa-solid fa-user"></i>  <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
                    </div>
                    
                    <div class="form_grupo">
                        <label>Email</label><br>
                        <i class="fa-solid fa-envelope"></i>  <input type="email" name="email" class="form_input" id="email" placeholder="seuemail@email.com"required>
                    </div>
                    
                    <div class="form_grupo">
                        <label>Data de Nascimento</label><br>
                        <i class="fa-solid fa-calendar"></i>  <input type="date" name="datanascimento" class="form_input" id="datanascimento" placeholder="__/__/____"required>
                    </div>
                    <div class="form_grupo">
                        <label>CPF</label><br>
                <i class="fa-solid fa-lock"></i>  <input type="numero" name="cpf" class="form_input" id="cpf" placeholder="___.___.___-__" required>
            </div>
            <div class="form_grupo">
                <label>Sexo:</label><br>
                <i class="fa-solid fa-venus-mars"></i>  <select id="sexo"name="sexo" >
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Näo informar</option>
                </select>
            </div>
            
            <div class="form_grupo">
                <label>Telefone</label><br>
                <i class="fa-solid fa-phone"></i>  <input type="numero" name="telefone" class="form_input" id="telefone" placeholder="(__) _____-____" required>
            </div>
            
            <div class="form_grupo">
                <label>Senha</label><br>
                <i class="fa-solid fa-lock"></i>  <input id="senha" class="senha" description="precisa ter entre 6 e 20 caracteres" type="password"minlength="6" maxlength="20" cursor="pointer" name="senha" required="" label="[object Object]">
            </div>
            <div class="submit">
                <input type="hidden" name="acao" value="enviar">
                <button type="submit" name="Submit" class="ntb"> Criar Cadastro</button>
            </div>
            <p description="já tem cadastro?" textlink="entrar" link="login.php" class="ad">já tem cadastro?<a href="login.php"class="entrar-btn">entrar</a></p>
        </form>
            </div>
</section>
 <!-- Rodapé -->
<section>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">SmartZone &copy; SmartZone 2024</p>
        </div>
    </footer>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>