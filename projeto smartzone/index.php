<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SMARTZONE</title>
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/global.css" rel="stylesheet" />
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

    <br><br>

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
                    <img src="./assets/img1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img3.webp" class="d-block w-100" alt="...">
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
                                    href="produto.php">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 6-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/placa de video.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Placa de Vídeo RX 6600 CLD 8G ASRock AMD Radeon</h5>

                                R$ 1.449,99
                            </div>
                        </div>

                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 7-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/ssd.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">SSD 1TB Kingston Nv2, M.2 2280 PCIe, NVMe</h5>

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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
                        </div>
                    </div>
                </div>

                <!--card 8-->

                <div class="col mb-5">
                    <div class="card h-100">

                        <img class="card-img-top" src="./assets/notebook.jpg" alt="..." />

                        <div class="card-body p-4">
                            <div class="text-center">

                                <h5 class="fw-bolder">Notebook Gamer Dell G15 Intel Core i5-13450HX</h5>

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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Comprar</a></div>
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
                                    <div class="bi-star-fill"></div>
                                </div>

                                <span class="text-muted text-decoration-line-through">R$ 997,00</span><br>
                                R$ 889,00
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