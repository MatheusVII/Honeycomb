<?php
    require('conexao.php');
    session_start();
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $usuarios = mysqli_query($conexao,$sql);
    $usuario = mysqli_fetch_assoc($usuarios);
    $nome = $usuario['nome'];
    $senha = $usuario['senha'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body{
            margin:0;
            padding:0;
            height: 1000px;
            background-color: #fffae3;
            font-family: 'Montserrat', Arial, sans-serif;
        }
        #formulario{
            width: 600px;
            margin-top: 10rem;
            background-color:white;
        }
        .btns{
            display:flex;
            justify-content: space-between;
        }
        #salvar{
            background-color:black;
            color:white;
            border:solid,2px,black;
        }
        #salvar:hover{
            background-color: #fec15f;
            color: black;
            border: solid, 2px, #fec15f;
        }
    </style>
  </head>
  <body>
    <div class="container mt-5 border border-2 border-dark p-3 rounded-3" id="formulario">
        <h1 class="text-center mb-4">Editar Perfil</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form action="functions.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=$email?>" required>
            </div>
            <div class="btns">
                <button type="submit" class="btn btn-primary btn-lg" id="salvar" name="editar">Salvar Alterações</button>
                <a href="perfil.php" class="btn btn-danger btn-lg">Voltar</a>
            </div>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>