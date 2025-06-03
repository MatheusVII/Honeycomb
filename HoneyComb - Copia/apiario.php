<?php
    require('conexao.php');
    session_start();
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apiario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
body {
    margin: 0;
    padding: 0;
    background-color: #fffae3;
    font-family: 'Montserrat', Arial, sans-serif;
}

h2, h3 {
    color: black;
    font-weight: bold;
    text-shadow: 1px 2px 0 #fffbe6;
    margin-top: 2rem;
    margin-bottom: 1.5rem;
}

.video {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 2rem;
}

.video video {
    border-radius: 16px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.10);
    background: #fff;
    padding: 8px;
}

.detalhes {
    display: flex;
    justify-content: flex-start;
    gap: 3rem;
    margin-top: 1rem;
    margin-bottom: 2rem;
}

.lista h4 {
    color: #222;
    font-weight: 500;
    margin-bottom: 0.7rem;
    margin-left:2rem;
    background: #fffbe6;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    border-left: 4px solid #ffc15e;
}

.final {
    width: 100%;
    margin-top: 2rem;
}

.final h3 {
    text-align: center;
    color: black;
    margin-bottom: 2rem;
}

.capacidades {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 2rem;
    margin-bottom: 2rem;
}

.capacidades .container {
    background-color: #fff;
    width: 28%;
    min-width: 220px;
    height: auto;
    border-bottom: 7px solid #ffc15e;
    border-radius: 16px 16px 0 0;
    padding: 2rem 1rem 1.5rem 1rem;
    box-shadow: 0 4px 16px rgba(0,0,0,0.07);
    display: flex;
    align-items: center;
    justify-content: center;
}

.capacidades .container p {
    font-size: 1.1rem;
    color: #222;
    text-align: center;
    margin: 0;
}
.voltar{
    display:flex;
    justify-content:space-between;
}
  </style>
</head>
<body>
    <div class="voltar">
        <h2>Manejo do Apiário - Mais Mel com Qualidade</h2>
        <a href="cursos.php" class="btn btn-danger btn-lg" style="height:3rem; margin:2rem">Voltar</a>
    </div>
  <section class="video">
        <video src="videos/apiario.mp4" width="50%" controls></video>
  </section>
  <h3>O que o curso inclui?</h3>
  <section class="detalhes">
    <div class="lista">
        <h4>Carga horária de 40 horas</h4>
        <h4>Filmes demonstrativos</h4>
        <h4>Tempo de acesso de 1 ano</h4>
    </div>
    <div class="lista">
        <h4>Conteúdo interativo de 31 páginas</h4>
        <h4>Avaliação</h4>
        <h4>Certificado digital</h4>
    </div>
  </section>
  <section class="final">
    <h3>Ao final do curso, você será capaz de:</h3>
    <div class="capacidades">
        <div class="container">
            <p>Utilizar equipamentos básicos para o manejo correto do apiário</p>
        </div>
        <div class="container">
            <p>Compreender a biologia e o comportamento das abelhas no apiário</p>
        </div>
        <div class="container">
            <p>Obter enxames de abelhas e fazer a transferência de um ninho natural para a colmeia</p>
        </div>
        <div class="container">
            <p>Domesticar abelhas corretamente em seu apiário</p>
        </div>
        <div class="container">
            <p>Realizar o manejo correto do apiário e das abelhas</p>
        </div>
        <div class="container">
            <p>Executar o manejo avançado do apiário</p>
        </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>