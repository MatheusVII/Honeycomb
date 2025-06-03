<?php
    require('conexao.php');
    SESSION_START();
    // Função para cadastrar usuário

    if(isset($_POST['cadastrar'])){
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);

        // Verifica se o email já está cadastrado
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado) > 0){
            $_SESSION['msg'] = "<p class='text-danger'>Email já cadastrado</p>";
            header("Location: index.php");
            exit();
        }
        else{
            $sql = "INSERT INTO usuarios (email, senha, nome) VALUES ('$email', '$senha','$nome')";
            mysqli_query($conexao,$sql);
            $_SESSION['email'] = $email;
            header("Location:sobre.php");
            exit();
        }
    }

    // Função para fazer login

    if(isset($_POST['entrar'])){
        $email = mysqli_real_escape_string($conexao,$_POST['email']);
        $senha = mysqli_real_escape_string($conexao,$_POST['senha']);
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $resultado = mysqli_query($conexao,$sql);
        if(mysqli_num_rows($resultado) > 0){
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        }
        else{
            $_SESSION['msg'] = "<p class='text-danger'>Email ou senha incorretos!</p>";
            header("Location: entrar.php");
            exit();
        }
    }

    // Função para assinar planos

    if(isset($_POST['operario'])){
        if(!isset($_SESSION['email'])){
            $_SESSION['msg'] = "<p class='text-danger'>Você precisa estar logado para assinar um plano!</p>";
            header('Location: cadastro.php');
            exit();
        }
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $usuarios = mysqli_query($conexao,$sql);
        foreach($usuarios as $usuario){
            if($usuario['id_assinatura'] == null){
                $email = $_SESSION['email'];
                $sql = "UPDATE usuarios SET id_assinatura = 1 WHERE email = '$email'";
                mysqli_query($conexao,$sql);
                $_SESSION['msg'] = "<p class='alert alert-success'>Assinatura Operário realizada com sucesso!</p>";
                header('Location: assinaturas.php');
                exit();
            }
            else{
                $_SESSION['msg'] = "<p class='alert alert-danger'>Voce ja tem uma assinatura!</p>";
                header('Location: assinaturas.php');
                exit();
            }
        }
    }

    if(isset($_POST['zangao'])){
        if(!isset($_SESSION['email'])){
            $_SESSION['msg'] = "<p class='text-danger'>Você precisa estar logado para assinar um plano!</p>";
            header('Location: cadastro.php');
            exit();
        }
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $usuarios = mysqli_query($conexao,$sql);
        foreach($usuarios as $usuario){
            if($usuario['id_assinatura'] == null){
                $email = $_SESSION['email'];
                $sql = "UPDATE usuarios SET id_assinatura = 2 WHERE email = '$email'";
                mysqli_query($conexao,$sql);
                $_SESSION['msg'] = "<p class='alert alert-success'>Assinatura Operário realizada com sucesso!</p>";
                header('Location: assinaturas.php');
                exit();
            }
            else{
                $_SESSION['msg'] = "<p class='alert alert-danger'>Voce ja tem uma assinatura!</p>";
                header('Location: assinaturas.php');
                exit();
            }
        }
    }

    if(isset($_POST['rainha'])){
        if(!isset($_SESSION['email'])){
            $_SESSION['msg'] = "<p class='text-danger'>Você precisa estar logado para assinar um plano!</p>";
            header('Location: cadastro.php');
            exit();
        }
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM usuarios WHERE email = '$email'"; 
        $usuarios = mysqli_query($conexao,$sql);
        foreach($usuarios as $usuario){
            if($usuario['id_assinatura'] == null){
                $pontosnovo = $usuario['pontos'] + 3;
                $email = $_SESSION['email'];
                $sql = "UPDATE usuarios SET id_assinatura = 3, pontos = '$pontosnovo' WHERE email = '$email'";
                mysqli_query($conexao,$sql);
                $_SESSION['msg'] = "<p class='alert alert-success'>Assinatura Operário realizada com sucesso!</p>";
                header('Location: assinaturas.php');
                exit();
            }
            else{
                $_SESSION['msg'] = "<p class='alert alert-danger'>Voce ja tem uma assinatura!</p>";
                header('Location: assinaturas.php');
                exit();
            }
        }
    }

    // Função para cancelar assinatura

    if(isset($_POST['cancelarAss'])){
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $email = $_SESSION['email'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $usuarios = mysqli_query($conexao, $sql);
        foreach($usuarios as $usuario){
            if($usuario['senha'] == $senha){
                $sql = "UPDATE usuarios SET id_assinatura = null WHERE email = '$email'";
                mysqli_query($conexao, $sql);
                header('Location: perfil.php');
                exit();
            }
            else{
                $_SESSION['msg'] = "<p class='alert alert-danger'>Senha incorreta!</p>";
                exit();
            }
        }
    }
    // Função para editar perfil

    if(isset($_POST['editar'])){
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);

        // Verifica se o email já está cadastrado
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($conexao, $sql);
        if(mysqli_num_rows($resultado) > 0){
            if($email == $_SESSION['email']){
                $emailAntigo = $_SESSION['email'];
                $sql = "UPDATE usuarios SET email='$email', senha='$senha', nome='$nome' WHERE email='$emailAntigo'";
                mysqli_query($conexao,$sql);
                $_SESSION['email'] = $email;
                header("Location: perfil.php");
                exit();
            }
            else{
                $_SESSION['msg'] = "<p class='text-danger'>Email já cadastrado</p>";
                header("Location: editar.php");
                exit();
            }

        }
        else{
            $emailAntigo = $_SESSION['email'];
            $sql = "UPDATE usuarios SET email='$email', senha='$senha', nome='$nome' WHERE email='$emailAntigo'";
            mysqli_query($conexao,$sql);
            $_SESSION['email'] = $email;
            header("Location: perfil.php");
            exit();
        }
    }

    // Função para resgatar produtos

    if(isset($_POST['pedido'])){
        $id_produto = $_POST['id_produto'];
        $email = $_SESSION['email'];
        $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
        $estado = mysqli_real_escape_string($conexao, $_POST['estado']);
        if($_POST['descricao'] != null){
            $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
        }
        else{
            $descricao = "Nenhuma descrição";
        }
        $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
        $cep = mysqli_real_escape_string($conexao, $_POST['cep']);

        $sql = "SELECT * FROM produtos WHERE id = '$id_produto'";
        $produtos = mysqli_query($conexao,$sql);
        $produto = mysqli_fetch_assoc($produtos);
        $preco_produto = $produto['preco'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $usuario = mysqli_query($conexao,$sql);
        $usuario = mysqli_fetch_assoc($usuario);
        $id_usuario = $usuario['id'];

        $pontos = $usuario['pontos'] - $preco_produto;
        if($pontos < 0){
            $_SESSION['msg'] = "Você não tem pontos suficientes para resgatar este produto!";
            header('Location: produto.php');
            exit();
        }   
        $sql = "INSERT INTO pedidos (id_produto, id_usuario, descricao) VALUES ('$id_produto', '$id_usuario', '$descricao')";
        mysqli_query($conexao, $sql);

        $sql = "UPDATE usuarios SET pontos = '$pontos', cidade = '$cidade', estado = '$estado', bairro = '$bairro', cep = '$cep' WHERE email = '$email'";
        $_SESSION['msg'] = "<p class='alert alert-success'>Pedido realizado com sucesso!</p>";
        mysqli_query($conexao, $sql);
        $_SESSION['msg1'] = "Pedido realizado com sucesso";
        header('Location: produto.php');
        exit();
    }
?>