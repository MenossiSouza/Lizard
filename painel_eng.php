<?php
    // INICIAR SESSÃO
    session_start();
    require_once 'acoes/verifica-logado.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bruno Menossi">

    <title>Lizard - MainPanel</title>
 
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/geral.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Lizard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Plans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servicos_eng.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>

        </ul>
        <div class="dados-usuario"> <?= $_SESSION['email']; ?> </div>
        <a href="acoes/logout.php" class="btn btn-danger">Sair</a>
      </div>
    </div>
  </nav>
</header>

<main>
  <div class="container-fluid"> <!-- div criada na parte 4 -->
    <?php include_once 'acoes/escreve-mensagem.php'; ?>
  </div>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/imagem01.jpg" alt="Foto de trabalho" />

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Plans</h1>
            <p>Hire a plan to use!</p>
            <p><a class="btn btn-lg btn-primary" href="#">Meet the plans</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/imagem02.jpg" alt="Foto de trabalho" />

        <div class="container">
          <div class="carousel-caption">
            <h1>Acces your hired services</h1>
            <p>Check and use the services available in your current plan.</p>
            <p><a class="btn btn-lg btn-primary" href="servicos_eng.php">Services</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/imagem03.jpg" alt="Foto de trabalho" />

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Always update your profile</h1>
            <p>Keep your personal and contact details up to date.</p>
            <p><a class="btn btn-lg btn-primary" href="perfil.php">Update Profile</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <h2>Plans</h2>
        <p>Hire a plan.</p>
        <p><a class="btn btn-primary" href="#">Plans &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2>Serviços</h2>
        <p>Use the services.</p>
        <p><a class="btn btn-primary" href="servicos_eng.php">Services &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        
        <h2>Configurations</h2>
        <p>Alter your account configuration.</p>
        <p><a class="btn btn-primary" href="configuracoes.php">Configure &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Ir para o topo</a></p>
    <p>&copy; 2022 Max Matters &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>


    <script src="assets/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
