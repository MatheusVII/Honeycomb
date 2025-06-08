<?php
    require('conexao.php');
    session_start();
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cursos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animation.css">

  <style>
    body{
        background-color: #fffae3;
        font-family: 'Montserrat', Arial, sans-serif;
    }
    .card img{
        height: 400px;
        border-radius: 13px 13px 0 0;
    }
    .card{
        border: solid 1px black;
        border-radius: 13px;
    }
    .card {
  opacity: 0;
  transform: translateY(40px);
  animation: fadeInUp 0.8s forwards;
}
.card:nth-child(1) { animation-delay: 0.2s; }
.card:nth-child(2) { animation-delay: 0.4s; }
.card:nth-child(3) { animation-delay: 0.6s; }

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Hover nos cards */
.card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 12px 32px rgba(0,0,0,0.18);
  transition: transform 0.3s, box-shadow 0.3s;
}
    footer {
      background-color: #fec15f;
      padding: 20px;
      margin-top: 5rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <?php
    include('navbar.php');
  ?>
  <div class="container py-5">
    <h2 class="text-center mb-4">3 Cursos na Área <strong>Apicultura</strong></h2>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
      
      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="img/curso1.webp" class="card-img-top" alt="Abelhas">
          <div class="card-body">
            <h5 class="card-title">Criação de Abelhas Nativas Sem Ferrão - Uruçu, Mandaçaia, Jataí e Iraí</h5>
            <p class="card-text">Prof.ª Dr.ª Ana Maria Waldschmidt</p>
            <a href="criacao.php" class="btn btn-outline-dark w-100">SAIBA MAIS</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="img/curso2.jpg" class="card-img-top" alt="Apiário">
          <div class="card-body">
            <h5 class="card-title">Manejo do Apiário - Mais Mel com Qualidade</h5>
            <p class="card-text">Prof. Paulo Sérgio Cavalcanti Costa</p>
            <a href="apiario.php" class="btn btn-outline-dark w-100">SAIBA MAIS</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="img/curso3.jpg" class="card-img-top" alt="Mel">
          <div class="card-body">
            <h5 class="card-title">Produção de Pólen e Geleia Real</h5>
            <p class="card-text">Prof. Paulo Sérgio Cavalcanti Costa</p>
            <a href="geleia.php" class="btn btn-outline-dark w-100 mt-4">SAIBA MAIS</a>
          </div>
        </div>
      </div>

    </div>
  </div>
<footer>
  <p>&copy; 2025 Apicultura Sustentável - Todos os direitos reservados</p>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
