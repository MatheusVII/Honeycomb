<?php
    session_start();
    require('conexao.php');
    $separa = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/loja.css">

    <style>
        footer {
      background-color: #fec15f;
      padding: 20px;
      text-align: center;
      margin-top:3rem;
    }
    </style>
  </head>
  <body>
    <?php
        include('navbar.php');
    ?>
    <div class="bottom"></div>
    <div class="produto">
            <?php
                require('conexao.php');
                $sql = "SELECT * FROM produtos";
                $produtos = mysqli_query($conexao,$sql);
                foreach($produtos as $produto):
                    if($produto['preco'] > 1){
                        $s = "S";
                    }
                    else{
                        $s = "";
                    }
            ?>
        <div class="card">
            <img src="<?=$produto['path']?>" alt="" class="card-img-top">
            <div class="card-body">     
                <h3 class="card-text"><?=$produto['descricao']?></h3>
                <h4 class="card-title fw-bold"><?=$produto['preco']?> PONTO<?=$s?></h4>
                <a href="produto.php?id=<?=$produto['id']?>" class="btn btn-primary w-100">RESGATAR</a>
            </div>
        </div>
        <?php
            if($separa == 3):
        ?>
        <div class="separa"></div> 
        <?php
            endif;
        ?>            
         <?php
            $separa++;
            endforeach;
         ?>
    </div>
    <footer>
        <p>&copy; 2025 Apicultura Sustentável - Todos os direitos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>