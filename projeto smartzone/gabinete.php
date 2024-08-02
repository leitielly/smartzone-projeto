<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GABINETE GAMER</title>
    <link rel="icon" type="image/x-icon" href="./assets/Logo-do-SMARTZONE.ico" />
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
                        CARRINHO
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!--Card produto principal-->

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="./assets/gabinete.jpg" alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1"> CC-9011200-WW</div>
                    <h1 class="display-5 fw-bolder">Gabinete Gamer Corsair 4000D Airflow, Mid-Tower, ATX, Lateral em
                        Vidro Temperado, Com FAN, Preto</h1>
                    <div class="fs-5 mb-5">

                        <span class="text-muted text-decoration-line-through"> R$ 777,67</span><br>
                        R$ 649,90

                    </div>
                    <p class="lead">O CORSAIR 4000D AIRFLOW é um Gabinete ATX de torre média otimizado para alto fluxo
                        de ar com fácil
                        gerenciamento de cabos e inclui ventiladores CORSAIR 120mm AirGuide para resfriamento
                        excepcional.</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Adicionar ao Carrinho
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Cards produtos relacionados-->

    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Produtos Relacionados</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/monitor.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Monitor Gamer KBM! GAMING MG800 34", Ultrawide, 180Hz, QHD, 1ms,
                                    DisplayPort e HDMI, Adaptive Sync, 95% SRGB - KGMG80034PT</h5>

                                <span class="text-muted text-decoration-line-through"> R$3.015,01</span><br>
                                R$ 1.929,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="produto.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--Card 2-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/teclado.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Teclado Mecânico Gamer HyperX Alloy MKW100, RGB, Switch Red, Full
                                    Size, US, Preto</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through"> R$ 555,45</span><br>
                                R$ 269,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="teclado.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--Card 3-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/mouse.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Mouse Gamer T-Dagger Camaro, RGB, 8000DPI, 8 Botões Programáveis,
                                    Preto - T-TGM306</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                R$ 79,99

                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="mouse.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--Card 4-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/headset.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Headset Gamer Fifine H9, Som Surround 7.1, USB, Console e PC,
                                    Preto - H9</h5>

                                <span class="text-muted text-decoration-line-through">R$ 277,77</span><br>
                                R$ 149,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Rodape pagina produto-->

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">SmartZone&copy; SmartZone 2024</p>
        </div>
    </footer>

    <!--script-->

    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>