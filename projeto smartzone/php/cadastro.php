<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
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
             <hr class="mx-auto">
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
                <button type="submit" name="Submit" class="btn"> Criar Cadastro</button>
            </div>
            <p description="já tem cadastro?" textlink="entrar" link="login.php" class="ad">já tem cadastro?<a href="login.php"class="entrar-btn">entrar</a></p>
        </form>
            </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>