<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMARTZONE</title>
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
                    <a href="carrinho.php" class="btn btn-outline-dark">
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                        Carrinho
                        <span class="badge bg-dark text-white ms-1 rounded-pill">3</span>
                    </></a>
                </form>
            </div>
        </div>
    </nav>

    <!--Header da pagina principal-->

    <header>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height: 400px; width: 700px;" src="./assets/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 400px; width: 700px;" src="./assets/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 400px; width: 700px;" src="./assets/img3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <!--Cards dos produtos-->

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/monitor.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Monitor Gamer KBM! GAMING MG800 34", Ultrawide, 180Hz, QHD, 1ms,
                                    DisplayPort e HDMI, Adaptive Sync, 95% SRGB - KGMG80034PT</h5>

                                <span class="text-muted text-decoration-line-through">R$3.015,01</span><br>
                                R$ 1.929,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/monitor.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 2-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/teclado.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Teclado Mecânico Gamer HyperX Alloy MKW100, RGB, Switch Red, Full
                                    Size, US, Preto - 4P5E1AA#ABA</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 555,45</span><br>
                                R$ 269,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/teclado.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 3-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/gabinete.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Gabinete Gamer Corsair 4000D Airflow, Mid-Tower, ATX, Lateral em
                                    Vidro Temperado, Com FAN, Preto - CC-9011200-WW</h5>

                                <span class="text-muted text-decoration-line-through">R$ 777,67</span><br>
                                R$ 649,90
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/gabinete.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 4-->

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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/mouse.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 5-->

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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/headset.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 6-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/placa de video.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Placa de Vídeo RX 6600 CLD 8G ASRock AMD Radeon, 8GB, GDDR6 -
                                    90-GA2RZZ-00UANF</h5>

                                R$ 1.449,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/placadevideo.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 7-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/ssd.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">SSD 1TB Kingston Nv2, M.2 2280 PCIe, NVMe, Leitura 3500MB/s,
                                    Gravação 2100MB/s - Snv2s/1000g</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                R$ 451,25
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/ssd.php">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--card 8-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/notebook.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Notebook Gamer Dell G15 Intel Core i5-13450HX, 8GB RAM, GeForce
                                    RTX 3050 6GB, SSD 512GB, 15.6 Full HD 120Hz, Windows 11 Home, Preto - G15-i1300-A20P
                                </h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                R$ 5.999,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/notebook.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 9-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/cadeira.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Cadeira Gamer KBM! GAMING Tempest CG600, Preta e Vermelho, Com
                                    Almofadas, Descanso Para Pernas Retrátil, Reclinável - KGCG600PTVM</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 1.157,79</span><br>
                                R$ 939,90
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/cadeira.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 10-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/gabinete branco.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Gabinete Gamer Rise Mode Galaxy Glass, Mid Tower, Lateral e
                                    Frontal em Vidro Temperado, Branco - RM-GA-GG-FW</h5>

                                <span class="text-muted text-decoration-line-through">R$ 646,94</span><br>
                                R$ 379,90
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/gabinetebranco.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 11-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/notebook vaio.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Notebook Vaio FH15, Intel Core I7-13700H, 32GB, SSD 1TB, Geforce
                                    RTX 3050, Tela 15.6 Full HD, Shell Efi, Cinza Escuro</h5>

                                R$ 6.899,00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/notevaio.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 12-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/headset rosa.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Headset Gamer Havit H2002D, Drivers 53mm, P3, XBOX ONE e PS4, Rosa
                                    - HV-H2002P</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 294,00</span><br>
                                R$ 189,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/headsetrosa.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 13-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/processador amd.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Processador AMD Ryzen 7 5700X3D, 3.6 GHz, (4.1GHz Max Turbo),
                                    Cachê 4MB, 8 Núcleos, 16 Threads, AM4 - 100-100001503WOF</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 2.138,37</span><br>
                                R$ 1.389,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/amd.php">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--card 14-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/processador intel.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Processador Intel Core i5-10400F, 2.9GHz (4.3GHz Max Turbo), Cache
                                    12MB, 6 Núcleos, 12 Threads, LGA 1200 - BX8070110400F</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 764,69</span><br>
                                R$ 560,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/intel.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 15-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/placa mae asus.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Placa Mãe Asus Prime H610M-A D4, LGA 1700 H610, mATX, DDR4</h5>

                                <span class="text-muted text-decoration-line-through">R$ 864,70</span><br>
                                R$ 629,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/placamae.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 16-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/pc completo.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Computador Bestpc Completo, Intel Core I5, 8GB, SSD 240GB, Windows
                                    10 Trial + Monitor 19 Polegadas</h5>

                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 997,00</span><br>
                                R$ 889,00
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                    href="./produtos/desktop.php">Comprar</a></div>
                        </div>
                    </div>
                </div>

            </div>
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

    <!--script-->

    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>