<?php
require('conexao.php');
session_start();
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assinaturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="css/assinatura1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animation.css">

    <style>
          footer {
      background-color: #fec15f;
      padding: 20px;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <?php
        include("navbar.php");
    ?>        
    <h1 class="titulo">Escolha sua assinatura</h1>
      <?php
      if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
      }
    ?>
    <section class="assinaturas">

        <article class="operario">

          <div class="foto">
            <img src="img/ope.jpg" alt="">
          </div>
          <div class="infor">
            <h3 class="nomeAssinatura">Operário</h3>
            <p class="descAssinatura">Tenha acesso aos nossos cursos sobre apicultura e abelhas, porém não recebe pontos mensais.</p>
            <h4>R$ 29,99/mês</h4>
            <form action="functions.php" method="post">
              <button type="submit" class="btn btn-lg btn-success" id="assinar" name="operario">Assinar</button>
            </form>
          </div>
        </article>
        
        <article class="zangao">
          <div class="foto">
            <img src="img/abelha.jpg" alt="">
          </div>
          <div class="infor">
            <h3 class="nomeAssinatura">Zangão</h3>
            <p class="descAssinatura">Tenha acesso aos nossos cursos e também a pontos mensais para trocar por produtos na loja.</p>
            <h4>R$ 39,99/mês</h4>
            <form action="functions.php" method="post">
              <button class="btn btn-lg btn-success" id="assinar" name="zangao">Assinar</button>
            </form>
          </div>
        </article>

        <article class="rainha">
          <div class="foto">
            <img src="img/rainha.jpg" alt="">
          </div>
          <div class="infor">
            <h3 class="nomeAssinatura">Rainha</h3>
            <p class="descAssinatura">Ganhe 3 pontos na hora que assinar, mais um kit de apicultor, além das vantagens anteriores.</p>
            <h4>R$ 49,99/mês</h4>
            <form action="functions.php" method="post">
              <button class="btn btn-lg btn-success" id="assinar" name="rainha">Assinar</button>
            </form>
          </div>
        </article>
    </section>
    <footer>
  <p>&copy; 2025 Apicultura Sustentável - Todos os direitos reservados</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>