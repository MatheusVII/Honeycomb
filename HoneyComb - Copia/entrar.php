<?php
  require('conexao.php');
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/entrar.css">
    <link rel="stylesheet" href="css/animation.css">
  </head>
  <body>
    <?php
      include('navbar.php');
    ?>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">ENTRAR</h2>
              <p>
                  <?php
                    if (isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    }
                  ?>
              </p>
            </div>
            <div class="card-body">
              <form action="functions.php" method="post">
                <div class="form-floating mb-4">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Email:">
                  <label for="email">Email:</label>
                </div>
                <div class="form-floating mb-4">
                  <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha:">
                  <label for="senha" class="form-label">Senha:</label>
                </div>
                <div class="form-check form-check-inline ms-1">
                  <input type="checkbox" class="form-check-input" id="mostrar_senha" name="mostrar_senha" onclick="mostrarSenha()">
                  <label class="form-check-label mb-3 ms-1" for="mostrar_senha">Mostrar Senha</label>
                </div>
                <button class="btn btn-primary w-100" type="submit" id="entrar" name="entrar">ENTRAR</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
          function mostrarSenha(){
        var inputPass = document.getElementById('senha');
        var btnMostrar = document.getElementById('mostrar_senha');

        if(inputPass.type === 'password'){
            inputPass.setAttribute('type','text');
        }
        else{
            inputPass.setAttribute('type','password');
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">    </script>
  </body>
</html>