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

    <style>
          footer {
      background-color: #fec15f;
      padding: 20px;
      margin-top:8rem;
      text-align: center;
    }
body {
background-color: #fefbe4;
font-family: 'Montserrat', Arial, sans-serif;
}
.intro{
display:flex;
justify-content:flex-start;
margin-top:5rem;
background-color: #a6ceca;
border:solid, 2px,black;
}
.intro h2{
width: 100%;
font-size: 2rem;
margin-right:3rem;
margin-top: 2rem;
}
.carrossel{
margin-top:10rem;
}
.slider{
width:100rem;
height:500px;
margin-right:9px;
overflow: hidden;
}
.slides{
display: flex;
width: 400%;
height:500px;
}
.slides input{
display:none;
}
.slide{
width:25%;
position:relative;
}
.slide img{
width:800px;
}
.manual-navigation{
position:absolute;
width:800px;
margin-top:-40px;
display:flex;
justify-content:center;
display:none;
}
.manual-btn{
border:solid,2px,white;
padding:5px;
border-radius:10px;
cursor:pointer;
transition:1s;
}
.manual-btn:not(:last-child){
margin-right:40px;
}
.manual-btn:hover{
background-color:white;
}
#radio-1:checked ~ .first{
margin-left:0;
}
#radio-2:checked ~ .first{
margin-left:-25%;
}
#radio-3:checked ~ .first{
margin-left:-50%;
}
.navigation-auto div{
border:solid,2px,#20a6ff;
padding:5px;
border-radius:10px;
cursor:pointer;
transition:1s;
display: none;
}
.navigation-auto{
position:absolute;
width:800px;
margin-top:460px;
display:flex;
justify-content:center;
}
.navigation-auto div:not(:last-child){
margin-right:40px;
}
#radio-1:checked ~ .navigation-auto .auto-btn-1{
background-color:white;
}
#radio-2:checked ~ .navigation-auto .auto-btn-2{
background-color:white;
}
#radio-3:checked ~ .navigation-auto .auto-btn-3{
background-color:white;
}
.detalhamento{
border:solid,2px,black;
background-color: #a6ceca;
margin-top:5rem;
height: 500px;
}
.p{
text-align:justify;
width:500px;
font-family:Andale Mono, monospace;
font-size:x-large;
}
.titulo{
    text-align:center;
    font-size: 4rem;
}
.cards{
    margin-top:2rem;
    display:flex;
    justify-content: space-around;
}
.card p{
    font-size: 23px;
    text-align: justify;
}
.card{
    width: 25%;
    height: 22rem;
    border: solid,2px,black;
    box-shadow: black 0px 5px 15px;
}
.card-header{
    background-color: #fec15f;
    height: 6rem;
    text-align:center;
    font-weight:bold !important;
    font-size: 2rem;
    font-family:Andale Mono, monospace;
}
.final{
    margin-top: 5rem;
    background-color:#a6ceca;
    height:46rem;
    padding: 2rem;
    border:solid,2px,black;
}
.assinaturas{
    margin-bottom:4rem;
    width:100%;
    height: 30rem;
    display: flex;
    align-items: center;
    justify-content: center;
}
.final p{
    font-size: 2rem;

}
.assinaturas img{
    border-radius: 13px;
    border : solid, 2px, black;
    margin: 1rem;
    width: 45%;
    height: 30rem;
}
section{
    box-shadow: black 0px 3px 10px;
}
/* Fade-in nos cards ao carregar */
.cards .card {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 0.8s ease forwards;
}
.cards .card:nth-child(1) { animation-delay: 0.2s; }
.cards .card:nth-child(2) { animation-delay: 0.4s; }
.cards .card:nth-child(3) { animation-delay: 0.6s; }

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Hover nos cards */
.cards .card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 12px 32px rgba(0,0,0,0.18);
  transition: transform 0.3s, box-shadow 0.3s;
}

.txtfinal{
    padding: 0 6rem 0 6rem;
    text-align: justify;
}
.card-title{
  font-size: 35px;
}
    </style>
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
    <footer>
      <p>&copy; 2025 Apicultura Sustentável - Todos os direitos reservados</p>
  </footer>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>