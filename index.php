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

<body>

  <section>
    <div id="container-login" class="container">
      <div class="d-none d-md-block cont-1 flex-column">
        <span class="logo">Help Desk</span>
        <p>Abra chamados para a equipe de suporte de um jeito facíl </p>
        <span class="rodape align-self-end">Copyright Claudio Anjos</span>
      </div>

      <div class="cont-2">
        <div class="img-login">
          <img class="img-fluid" src="img/support-image.png" alt="">
          <h3>login</h3>
        </div>

        <form action="valida_login.php" method="post">
          <input class="form-control" type="email" name="email" placeholder="E-mail" required>

          <input class="form-control" type="password" name="senha" placeholder="Senha" required>

          <?php
          if (isset($_GET['login']) && $_GET['login'] == 'erro') {
          ?>

            <p class="text-danger">
              Usuario ou Senha Invalidos(a)
            </p>

          <?php
          }

          ?>


          <?php
          if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
          ?>

            <p class="text-danger">
              Você precisa estar logado para ter acesso a pagína
            </p>

          <?php
          }

          ?>

          <button class="btn btn-primary btn-block" type="submit">Entrar</button>
        </form>

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