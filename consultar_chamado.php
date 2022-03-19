<?php
require_once "validar_pagina.php";
?>

<?php

require_once "recupera_chamados.php";

?>

<!-- 

<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">Sair</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">


            <?php foreach ($chamados as $chamado) { ?>
              <?php
              $dados_chamado = explode('#' , $chamado);

              if(count($dados_chamado) < 3) {
                continue;
              }

              if($_SESSION['perfil'] == 2) {
                if($_SESSION['id'] != $dados_chamado[3]) {
                  continue;
                }
              }    

              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $dados_chamado[0] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $dados_chamado[1] ?></h6>
                  <p class="card-text"><?= $dados_chamado[2] ?></p>
                </div>
              </div>

            <?php } ?>



            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>

            -->


            <!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <title>App Help Desk</title>
</head>

<body style="background: #a6a7a2;">

  <!--Menu-->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><img width="100px" src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Pagína Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Controle de Chamados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Usuários</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="logoff.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section id="menu" class="mt-5">
    <div class="container bg-light p-4">

      <div class="row justify-content-center">

        <a style="text-decoration: none;" href="abrir_chamado.php" class="col-md-3 m-3">

          <div class=" menu-chamados">
            <img width="100px" class="img-fluid" src="img/solicitacao.png" alt="">
            <div id="chama" class="nick_chamados">
              Abrir Chamados
            </div>
          </div>

        </a>

        <a style="text-decoration: none;" href="consultar_chamado.php" class="col-md-3 m-3">

          <div class=" menu-chamados">
            <img width="100px" class="img-fluid" src="img/lupa-simples.png" alt="">
            <div id="chama" class="nick_chamados">
              Consultar Chamados
            </div>
          </div>

        </a>

        <a style="text-decoration: none;" href="" class="col-md-3 m-3">

          <div class=" menu-chamados">
            <img width="100px" class="img-fluid" src="img/andamento.png" alt="">
            <div id="chama" class="nick_chamados">
              Chamados Atendidos
            </div>
          </div>

        </a>

       
      </div>   
      
      <div class="card-consultar-chamado mt-3">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">


            <?php foreach ($chamados as $chamado) { ?>
              <?php
              $dados_chamado = explode('#' , $chamado);

              if(count($dados_chamado) < 3) {
                continue;
              }

              if($_SESSION['perfil'] == 2) {
                if($_SESSION['id'] != $dados_chamado[3]) {
                  continue;
                }
              }    

              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $dados_chamado[0] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $dados_chamado[1] ?></h6>
                  <p class="card-text"><?= $dados_chamado[2] ?></p>
                </div>
              </div>

            <?php } ?>



            <div class="row mt-5">
              <div class="col-6">
                <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>


   
      
    </div>   
  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>