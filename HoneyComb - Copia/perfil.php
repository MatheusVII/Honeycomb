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
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil3.css">

    <style>
body{
    margin:0;
    padding:0;
    background-color: #fffae3;
    font-family: 'Montserrat', Arial, sans-serif;
}
.foto{
    display:flex;
    flex-direction: column;
    align-items: center;
    width:100%;
    margin-top: 1rem;
    gap: 1rem;
}
.perfil{
    width:15rem;
    height:15rem;
}
.alterar{
    display: flex;
    margin-left:0.5rem;
}
.info{
    height: 30rem;
    width: 100%;
    margin-top:2rem;
    padding-left: 2rem;
    padding-right: 2rem;
    padding-top:2rem;
    background-color: white;
    display: flex;
    justify-content: space-between;
    box-shadow: black 0px 5px 15px;
}
.ftassinatura{
    width: 300px;
    margin-bottom:1rem;
    border-radius:13px; 
}
.email{
    margin-bottom:6rem;
}
.senha{
    margin-bottom:5rem;
}
.voltar{
    display: flex;
    justify-content: space-between;
    padding-top:2rem;
    padding-right:2rem;
    background-color: white;
    border-bottom: solid,2px,black;
    box-shadow:black 0px 5px 15px
}
.dados{
    margin-top:2rem;
}
.assinatura{
    margin-top: 1rem;
}
.editar{
    text-decoration: none;
    color:black;
    font-size: 1.5rem;
    height: 2rem;
    margin-left:2rem;
}
.editarimg{
    margin-left: 0.5rem;
    margin-bottom: 0.6rem;
}
.btnvoltar a{
    background-color: black !important;
    color: white;
    margin-bottom: 1rem;
    height: 2.8rem;
    border:solid,1px,black;
}
.btnvoltar a:hover{
    background-color: #fec15f !important;
    color: black;
    border:solid,1px,#fec15f;
}
.editar:hover{
    text-decoration: underline;
}
#sair{
    background-color:black;
    color:white;
    border:solid,1px,black;
}
#sair:hover{
    background-color: #fec15f !important;
    color: black;
    border:solid,1px,#fec15f;
}
.pontos{
    margin-right:50rem;
}
.btnpedidos{
    text-decoration: none;
    color:black;
    background-color: white;
    font-size: 1.5rem;
    height: 2rem;
    border: none;
    margin-left:2rem;
    transition: transform 0.3s;
}
.btnpedidos:hover{
    text-decoration: underline;
}
.container{
    display: flex;
    width:40rem;
    height:18rem;
    justify-content: space-around;
}
.fotoProduto img{
    width:200px;
    height:200px;
}
.nome{
    display: flex;
}
.preco{
    display: flex;
}
.endereco{
    display: flex;
    margin-top:1rem;
}
.cidade{
    margin-left:3rem;
}
.descricao{
    margin-left:3rem;
}
.info, .foto, .assinatura {
  opacity: 0;
  transform: translateY(40px);
  animation: fadeInUp 0.8s forwards;
}
.info { animation-delay: 0.2s; }
.foto { animation-delay: 0.4s; }
.assinatura { animation-delay: 0.6s; }

@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.btnpedidos:hover {
    text-decoration: underline;
    transform: scale(1.12);
    transition: 0.3s;
}
.botoes{
    margin-top: 15rem;
}
#cancelarass{
    color:white;
    background-color:black;
    border: solid 1px black;
    animation: 0.3s;
}
#cancelarass:hover{
    background-color: #fec15f;
    color: black;
    transition: 0.3;
    border:solid 1px #fec15f;
}
    </style>
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
            <a href="index.php" class="btn btn-danger btn-lg" id="btnvoltar">Voltar</a>
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
            <form action="perfil.php" method="post" class="botoes">
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
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="cancelarAss" id="cancelarass">Confirmar</button>
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