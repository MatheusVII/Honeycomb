<?php
  session_start();
  require('conexao.php');
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HoneyComb - Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/sobre4.css">
  </head>
  <body id="body">
    <?php
        include("navbar.php");
    ?>
    <section class="intro">    
    <div class="slider">
          <div class="slides">
            <input type="radio" name="radio-btn" id="radio-1">
            <input type="radio" name="radio-btn" id="radio-2">
            <input type="radio" name="radio-btn" id="radio-3">
            <div class="slide first">
              <img src="https://static.vecteezy.com/ti/fotos-gratis/p2/48137631-uma-abelha-e-em-uma-rosa-flor-com-uma-rosa-fundo-natureza-fundo-gratis-foto.jpg" alt="">
            </div>
            <div class="slide">
              <img src="img/abelha.jpg" alt="">
            </div>
            <div class="slide">
              <img src="https://cdn.pixabay.com/photo/2023/08/14/20/04/bee-8190665_1280.jpg" alt="">
            </div>
            <div class="navigation-auto">
              <div class="auto-btn-1"></div>
              <div class="auto-btn-2"></div>
              <div class="auto-btn-3"></div>
            </div>
          </div>
          <div class="manual-navigation">
              <label for="radio-1" class="manual-btn"></label>
              <label for="radio-2" class="manual-btn"></label>
              <label for="radio-3" class="manual-btn"></label>
          </div>
      </div>        
      <h2><strong>HoneyComb</strong> foi criado visando sustentabilidade e a preservação das abelhas no nosso mundo. HoneyComb caminha junto com a <strong>Apicultura</strong> para gerar uma forma intuitiva e até lucrativa de cuidar desses polinizadores. A vida desses seres estão diretamete ligada ao que nós consumimos diariamente, por mais pequenos que sejam.</h2>
    </section>

    <section class="detalhamento">
      <h2 class="titulo">Por que abelhas?</h2>
      <div class="cards">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Ameaçadas de extinção</h3>
          </div>
          <div class="card-body">
            <p>Muitas espécies de abelhas estão ameaçadas de extinção. Só no Brasil, de 1700 espécies de abelhas, 209 foram avaliadas quanto ao risco de extinção. Dessas, 5 espécies estão oficialmente ameaçadas.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Maiores polinizadoras do mundo</h3>
          </div>
          <div class="card-body">
            <p>As abelhas, de longe, são as maiores polinizadoras do mundo, adaptando-se para uma alimentação exclusiva de pólen. Junto a uma camada de pelos em seu corpo, elas se transformam em uma pulverizadora de pólen da natureza.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Importantes para o agronegócio</h3>
          </div>
          <div class="card-body">
            <p>A polinização gerada pelas abelhas pode melhorar a qualidade e o tamanho da colheita dos alimentos. No Brasil, essa função impacta diretamente nas culturas do café, soja, maçã, melancia e melão.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="final">
      <div class="assinaturas">
        <img src="img/img.jpg" alt="">
        <img src="img/ass.jpg" alt="">
      </div>
      <p class="txtfinal">Nos ajude a preservar as abelhas do nosso país juntando-se à nossa causa, assine um de nossos planos para começar a nos apoiar em nosso projeto e receber beneficios como ensinamentos sobre apicultura, colmeias artificiais, espécies de abelhas entre outros</p>
    </section>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>