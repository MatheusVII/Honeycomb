<?php
    session_start();
    require('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apicultura Sustentável</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animation.css">
  <style>
    body {
      background-color: #fffae3;
      font-family: 'Montserrat', Arial, sans-serif;
    }
    .hero {
      background: url('https://source.unsplash.com/1600x600/?bees,honey') center/cover no-repeat;
      color: black;
      text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
      padding: 100px 20px;
      text-align: center;
    }
    .section-about {
      background-color: #a6ceca;
      padding: 60px 20px;
      border-radius: 10px;
      border: solid,2px,black;
      box-shadow: black 0 5px 15px;
      margin-top: 40px;
    }
    .product-card {
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    .product-card img {
      border-radius: 10px 10px 0 0;
      width: 100%;
      height: 400px;
    }
    .product-card:hover {
      transform: translateY(-5px);
    }
    footer {
      background-color: #fec15f;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<?php
    include('navbar.php');
?>

<!-- Hero Section -->
<div class="hero">
  <h1 class="display-4">Descubra a magia das abelhas</h1>
  <p class="lead">Promovendo apicultura sustentável e produtos naturais</p>
  <a href="#produtos" class="btn btn-dark mt-3">Conheça nossos produtos</a>
</div>

<!-- Sobre Nós -->
<div id="sobre" class="container section-about">
  <h2 class="text-center mb-4">Sobre Nós</h2>
  <p class="text-center fs-5">Somos apaixonados por abelhas e pela preservação do meio ambiente. Nosso trabalho une tradição, sustentabilidade e produtos naturais de alta qualidade.</p>
</div>

<!-- Produtos -->
<div id="produtos" class="container my-5">
  <h2 class="text-center mb-4">Nossos Produtos</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card product-card">
        <img src="img/pote de mel.jpeg" class="card-img-top" alt="Mel">
        <div class="card-body">
          <h5 class="card-title">Mel Puro</h5>
          <p class="card-text">Mel 100% natural, direto do apiário.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card">
        <img src="img/sabonete2.jpg" class="card-img-top" alt="Cera">
        <div class="card-body">
          <h5 class="card-title">Sabonete de mel</h5>
          <p class="card-text">Perfeito para pele, limpa e hidrata perfeitamente.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card product-card">
        <img src="img/labio.jpg" class="card-img-top" alt="Própolis">
        <div class="card-body">
          <h5 class="card-title">hidratante labial natural</h5>
          <p class="card-text">Feito com cera de abelha coletada nos apiarios.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blog -->
<div id="blog" class="container my-5">
  <h2 class="text-center mb-4">Blog</h2>
  <p class="text-center">Confira dicas sobre apicultura, conservação das abelhas e receitas deliciosas com mel.</p>
</div>

<!-- Contato -->
<div id="contato" class="container my-5">
    <h2 class="text-center">Saiba mais sobre nossa causa em <a href="sobre.php">Sobre nos.</a></h2>
</div>

<!-- Rodapé -->
<footer>
  <p>&copy; 2025 Apicultura Sustentável - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
