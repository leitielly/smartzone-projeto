<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMARTZONE</title>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }
    
    .section {
        margin-bottom: 20px;
    }
    .section img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
    .instructions {
        margin-top: 10px;
        font-size: 16px;
        line-height: 1.5;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px 0;
        background-color: #0056b3;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
    }
    .button:hover {
        background-color: #004494;
    }
</style>

<body>

    <!--Menu de Navegação-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">SMARTZONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#!">Fale Conosco</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acesse sua Conta</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Cadastro</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Login</a></li>
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
                <h1 class="display-4 fw-bolder">SmartZone</h1>

            </div>
        </div>
    </header>

    <div class="container">
        <h1>Adicionar ou Alterar Forma de Pagamento</h1>
        
        <div class="section" id="adicionar-pagamento">
            <h2>Como Adicionar uma Nova Forma de Pagamento</h2>
            <img src="" alt="Adicionar Pagamento" class="">
            <div class="instructions">
                <p>Para adicionar uma nova forma de pagamento, siga os passos abaixo:</p>
                <ol>
                    <li>Faça login na sua conta.</li>
                    <li>Acesse a seção "Métodos de Pagamento".</li>
                    <li>Clique em "Adicionar Novo Método de Pagamento".</li>
                    <li>Insira as informações do seu novo método de pagamento.</li>
                    <li>Confirme e salve as informações.</li>
                </ol>
                <a href="link-para-adicionar-pagamento" class="button">Adicionar Forma de Pagamento</a>
            </div>
        </div>
        
        <div class="section" id="alterar-pagamento">
            <h2>Como Alterar uma Forma de Pagamento</h2>
            <img src="" alt="Alterar Pagamento" class="">
            <div class="instructions">
                <p>Para alterar uma forma de pagamento existente, siga os passos abaixo:</p>
                <ol>
                    <li>Faça login na sua conta.</li>
                    <li>Acesse a seção "Métodos de Pagamento".</li>
                    <li>Encontre o método de pagamento que deseja alterar e clique em "Editar".</li>
                    <li>Atualize as informações conforme necessário.</li>
                    <li>Confirme e salve as alterações.</li>
                </ol>
                <a href="link-para-alterar-pagamento" class="button">Alterar Forma de Pagamento</a>
            </div>
        </div>
    </div>
    
    </body>
    </html>
    

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