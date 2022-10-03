<!DOCTYPE html>
<html lang="pt-br">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Perfil </title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
  <!-- Icones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- fonte personalizada -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  
  <!-- estilo do nosso tema -->
  <link rel="stylesheet" href="assets/css/tema-curriculo.css" />
  <link rel="stylesheet" href="assets/css/form-validation.css" />
  
</head>
<body>

<!-- barra de navegacao -->
 <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <div class="navbar-header">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">NOME</a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav d-flex justify-content-end" id="links">
            <li><a href="painel.php">X</a></li>
        </ul>
    </div>
  </div>
</nav>

<!-- container fluido 100% -->
<div class="container-fluid bg1 text-center" id="quem">

  <h3>Quem sou eu? </h3>
  <img src="images/foto-perfil.jpg" class="img-responsive img-redonda" style="display:inline" alt="Foto" width="200">
  <form action="" method="POST" enctype="multipart/form-data" class="needs-validation container" novalidate>
    <input type="file" name="foto" id="foto" />

 
    <div class="row g-12">

      <div class="col-sm-12">
        <label for="nome" class="form-label">Name and last name</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" autofocus required>
        <div class="invalid-feedback">
          Type your name and last name.
        </div>
      </div>

      <div class="col-sm-12">
        <label for="nacionalidade" class="form-label">Language</label>
        <select type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="" value="Brasileiro(a)" required>
            <option value="English">English</option>
            <option value="Portuguese Brazil">Portuguese Brazil</option>
            <option value="Spanish">Spanish</option>
        </select>
        <div class="invalid-feedback">
          Select your language.
        </div>
      </div>


      <div class="col-12">
        <label for="email" class="form-label">Type one valid email</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" required>
        <div class="invalid-feedback">
            Type your email.
          </div>
        </div>
      </div>

      <div class="col-12">
        <label for="senha" class="form-label">Password</label>
        <div class="input-group has-validation">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="" required>
        <div class="invalid-feedback">
            Type you password.
          </div>
        </div>
      </div>

      </div>
      <br>
      <button class="w-100 btn btn-primary btn-lg" type="submit" name="bt_cadastrar">
      Sign up
      </button>
  
  
  </form>
</div>

<!-- bootstrap.js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/form-validation.js"></script>
</body>
</html>