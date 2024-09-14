<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio Bootstrap</title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <!--Início do navbar-->

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src="./img/img navbar.webp" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Enquetes hollywood</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Enquete</a>
              </li>
            
            </ul>
          </div>
        </div>
        <div class="text-end">
          <a href="login.php"><button type="button" class="btn btn-success me-2">Login</button></a>
          <a href="cadastro.php"><button type="button" class="btn btn-danger">Cadastro</button></a>
              </div>
      </nav>
      
    <!--Fim do navbar-->
