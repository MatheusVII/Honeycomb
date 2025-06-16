<?php
    require('conexao.php');
    session_start();
    if(isset($_GET['id'])){
      $_SESSION['id'] = $_GET['id'];
    }
      $id = $_SESSION['id'];
      $email = $_SESSION['email'];
      $sql = "SELECT * FROM produtos WHERE id = $id";
      $produtos = mysqli_query($conexao,$sql);
      $sql = "SELECT * FROM usuarios WHERE email = '$email'";
      $usuarios = mysqli_query($conexao,$sql);
      $usuario = mysqli_fetch_assoc($usuarios);
      $pontos = $usuario['pontos'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/produto3.css">
    <link rel="stylesheet" href="css/animation.css">

    <style>
          footer {
      background-color: #fec15f;
      padding: 20px;
      margin-top:12rem;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <?php
        include('navbar.php');

        foreach($produtos as $produto):
            $preco = $produto['preco'];
            $descricao = $produto['descricao'];
            $path = $produto['path'];
    ?>
    <?php
      if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
      }
    ?>
    <div class="d-flex justify-content-center" id="produto">
        <div class="container">
            <img src="<?=$path?>" alt="" id="img-produto">
        </div>            
        <div class="container-sm"> 
            <h1><?=$descricao?></h1>
            <br>
            <br>
            <h3><?=$preco?> PONTOS</h3>
            <h4 class="text-secondary mt-2">Você tem <?=$pontos?> pontos</h4>
            <button type="submit" class="btn btn-primary border border-black text-dark border-1 w-100" id="comprar" name="resgatar" data-bs-toggle="modal" data-bs-target="#form">RESGATAR</button>
            <a href="loja.php" class="btn btn-danger float-end mt-3 w-100 fw-bold">VOLTAR</a>
          </div>
        </div>
        <div class="modal fade" id="form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-3" id="staticBackdropLabel">Preencha para resgatar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="functions.php" method="POST">
                  <div class="mb-3">
                    <select id="estado" name="estado" class="form-select" required>
                      <option value="" selected disabled>Selecione seu estado</option>
                      <option value="AC">Acre (AC)</option>
                      <option value="AL">Alagoas (AL)</option>
                      <option value="AP">Amapá (AP)</option>
                      <option value="AM">Amazonas (AM)</option>
                      <option value="BA">Bahia (BA)</option>
                      <option value="CE">Ceará (CE)</option>
                      <option value="DF">Distrito Federal (DF)</option>
                      <option value="ES">Espírito Santo (ES)</option>
                      <option value="GO">Goiás (GO)</option>
                      <option value="MA">Maranhão (MA)</option>
                      <option value="MT">Mato Grosso (MT)</option>
                      <option value="MS">Mato Grosso do Sul (MS)</option>
                      <option value="MG">Minas Gerais (MG)</option>
                      <option value="PA">Pará (PA)</option>
                      <option value="PB">Paraíba (PB)</option>
                      <option value="PR">Paraná (PR)</option>
                      <option value="PE">Pernambuco (PE)</option>
                      <option value="PI">Piauí (PI)</option>
                      <option value="RJ">Rio de Janeiro (RJ)</option>
                      <option value="RN">Rio Grande do Norte (RN)</option>
                      <option value="RS">Rio Grande do Sul (RS)</option>
                      <option value="RO">Rondônia (RO)</option>
                      <option value="RR">Roraima (RR)</option>
                      <option value="SC">Santa Catarina (SC)</option>
                      <option value="SP">São Paulo (SP)</option>
                      <option value="SE">Sergipe (SE)</option>
                      <option value="TO">Tocantins (TO)</option>
                    </select>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?=$usuario['cidade']?>" placeholder="Cidade:" required>
                    <label for="email">Cidade:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?=$usuario['bairro']?>">
                    <label for="bairro">Bairro:</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP" value="<?=$usuario['cep']?>" required>
                    <label for="cep">CEP:</label>
                  </div>
                  <input type="hidden" name="id_produto" value="<?=$id?>">
                  <button type="submit" class="btn btn-primary w-100 fs-5" id="pedido" name="pedido">Resgatar</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger w-100 fs-5" data-bs-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
       </div>
        <?php
            endforeach;
        ?>
    </div>
    <footer>
      <p>&copy; 2025 Apicultura Sustentável - Todos os direitos reservados</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>