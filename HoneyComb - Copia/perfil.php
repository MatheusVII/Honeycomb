<?php
    require('conexao.php');
    session_start();
    if(isset($_POST['encerrar'])){
        session_destroy();
        header('Location: index.php');
        exit();
    }
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $usuarios = mysqli_query($conexao, $sql);
    foreach($usuarios as $usuario):
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $senha = $usuario['senha'];
        $pontos = $usuario['pontos'];
        $cidade = $usuario['cidade'];
        $estado = $usuario['estado'];
        $bairro = $usuario['bairro'];
        $id_assinatura = $usuario['id_assinatura'];
        $id = $usuario['id'];

        if($id_assinatura == 1){
            $assinatura = "Operário";
            $path = "img/ope.jpg";
            $pontos = "Sem pontos";
        } elseif($id_assinatura == 2){
            $assinatura = "Zangão";
            $path = "img/abelha.jpg";
        } elseif($id_assinatura == 3){
            $assinatura = "Rainha";
            $path = "img/rainha.jpg";
        }
        elseif($id_assinatura == null){
            $assinatura = "Nenhuma assiatura";
            $path = "";
            $pontos = "Sem pontos";
        }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil3.css">
  </head>
  <body>
    <div class="voltar">
        <div class="pedidos">
            <a href="editar.php" class="editar">EDITAR DADOS<img src="img/editar.png" class="editarimg" alt="" width="25" height="25"></a>
            <button type="button" class="btnpedidos" data-bs-toggle="modal" data-bs-target="#pedidos">VER PEDIDOS</button>
        </div>
        <div class="modal fade" id="pedidos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-3" id="exampleModalLabel">Seus Pedidos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <?php
                        $sql = "SELECT * FROM pedidos WHERE id_usuario = '$id'";
                        $pedidos = mysqli_query($conexao, $sql);
                        if(mysqli_num_rows($pedidos) == 0){
                            echo "<div class='alert alert-warning' role='alert'>Nenhum pedido encontrado!</div>";
                        }
                        elseif(mysqli_num_rows($pedidos) > 0){
                            foreach($pedidos as $pedido){
                                $id_produto = $pedido['id_produto'];
                                $descricao = $pedido['descricao'];
                                $sql2 = "SELECT * FROM produtos WHERE id = '$id_produto'";
                                $produtos = mysqli_query($conexao, $sql2);
                                foreach($produtos as $produto){
                    ?>
                    <div class="container border-bottom mb-3">
                        <div class="fotoProduto">
                            <img src="<?=$produto['path']?>" alt="">
                        </div>
                        <div class="infoProduto">
                            <div class="nome">
                                <h3>Nome:</h3>
                                <h3><?=$produto['nome']?></h3>
                            </div>
                            <div class="preco">
                                <h3>Preco: </h3>
                                <h3><?=$produto['preco']?> Ponto(s)</h3>
                            </div>
                            <div class="endereco">
                                <div class="estado">
                                    <h5>Estado:</h5>
                                    <h5><?=$estado?></h5>
                                </div>
                                <div class="cidade">
                                    <h5>Cidade:</h5>
                                    <h5><?=$cidade?></h5>
                                </div>
                            </div>
                            <div class="endereco">
                                <div class="bairro">
                                    <h5>Bairro:</h5>
                                    <h5><?=$bairro?></h5>
                                </div>
                                <div class="descricao">
                                    <h5>Descricao:</h5>
                                    <h5><?=$descricao?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                            }
                        }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger fs-5" data-bs-dismiss="modal">Fechar</button>
                </div>
                </div>
            </div>
        </div>
        <div class="btnvoltar">
            <a href="sobre.php" class="btn btn-danger btn-lg" id="btnvoltar">Voltar</a>
        </div>
    </div>
    <section class="foto">
        <img src="img/usuario.png" alt="" class="perfil">
        <div class="alterar">
            <h2 class="nome"><?=$nome?></h2>
        </div>
    </section>
    <section class="info border-top border-black">
        <div class="dados">
            <div class="email">
                <h2>Email:</h2>
                <h3><?=$email?></h3>
            </div>
            <div class="senha">
                <h2>Senha:</h2>
                <h3><?=$senha?></h3>
            </div>
            <form action="perfil.php" method="post">
                <button class="btn btn-danger btn-lg" id="sair" name="encerrar">ENCERRAR SESSAO</button>
                <?php
                 if($id_assinatura != null):
                ?>
                <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">CANCELAR ASSINATURA</button>
                <?php
                endif;
                ?>
            </form>
        </div>
        <div class="dados">
            <div class="pontos">
                <h2>Pontos:</h2>
                <h3><?=$pontos?></h3>
            </div>
        </div>
        <div class="assinatura">
            <h2>Assinatura:</h2>
            <img src="<?=$path?>" alt="" class="ftassinatura">
            <h3><?=$assinatura?></h3>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-2" id="exampleModalLabel">Cancelar Assinatura</h1>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="functions.php" method="post">
                <div class="form-floating">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha para cancelar a assinatura" required>
                    <label for="senha">Digite sua senha para cancelar a assinatura</label>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="cancelarAss">Confirmar</button>
        </form>
        </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    endforeach;
?>