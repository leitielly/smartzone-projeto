<?php
session_start();
if(!isset($_SESSION['logged_in'])){
  header('location:login.php');
}


if(isset($_GET['logout'])){
  if(isset($_SESSION['logged_in'])){
    unset($_SESSION['logged_in']);
    unset($_SESSION[['nome']]);
    unset($_SESSION[['email']]);
    unset($_SESSION[['endereco']]);
    header('location:login.php');
    exit;
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2efb6f99a5.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/global.css" rel="stylesheet" />
    <link rel="stylesheet" href="cadlog.css">
    
    <title>Document</title>
</head>
<body>
    <!--Conta-->
  <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
                <h1 class="font-weight-bold">Informação da conta</h1>
                <hr id="traco" class="mx-auto">
                <div class="account-info">
                    <p>Nome completo:<span><?php if(isset($_SESSION['nome'])){ echo $_SESSION['nome'];}?></p>
                    <p>Email:<span><?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?></p>
                    <p>Endereço:<span><?php if(isset($_SESSION['endereco'])){ echo $_SESSION['endereco'];}?></p>
                        <p><a href="#orders"id="pedidos-btn">Seus Pedidos</a></p>
                        <p><a href="account.php?logout=1"id="logout-btn">Logout</a></p>
                </div>
            </div>
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

  
  
    <footer id="rede"class="text-center text-lg-start text-white">
<!-- Grid container -->
<div class="container p-4 pb-0">
<!-- Section: Links -->
<section class="">
<!--Grid row-->
<div class="row">
  <!-- Grid column -->
  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">
      Company name
    </h6>
    <p>
      Here you can use rows and columns to organize your footer
      content. Lorem ipsum dolor sit amet, consectetur adipisicing
      elit.
    </p>
  </div>
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
    <p>
      <a class="text-white">MDBootstrap</a>
    </p>
    <p>
      <a class="text-white">MDWordPress</a>
    </p>
    <p>
      <a class="text-white">BrandFlow</a>
    </p>
    <p>
      <a class="text-white">Bootstrap Angular</a>
    </p>
  </div>
  <!-- Grid column -->

  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">
      Useful links
    </h6>
    <p>
      <a class="text-white">Your Account</a>
    </p>
    <p>
      <a class="text-white">Become an Affiliate</a>
    </p>
    <p>
      <a class="text-white">Shipping Rates</a>
    </p>
    <p>
      <a class="text-white">Help</a>
    </p>
  </div>

  <!-- Grid column -->
  <hr class="w-100 clearfix d-md-none" />

  <!-- Grid column -->
  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
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
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
    <!-- Facebook -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-facebook-f"></i
      ></a>

    <!-- Twitter -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-twitter"></i
      ></a>

    <!-- Google -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-google"></i
      ></a>

    <!-- Instagram -->
    <a
       class="btn btn-outline-light btn-floating m-1"
       class="text-white"
       role="button"
       ><i class="fab fa-instagram"></i
      ></a>
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