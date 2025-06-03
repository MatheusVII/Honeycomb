<nav id="navbar" class="navbar navbar-expand-lg" style="background-color:#fec15f;">
  <div class="container-fluid">
    <a href="index.php" class="navbar-brand fw-bold" style="font-size:3rem; height:5rem;">HONEYCOMB</a>  
    <div class="d-flex flex-row mt-2" id="bntContainer">
      <?php
        if(isset($_SESSION['email'])){
          $email = $_SESSION['email'];
          $sql = "SELECT * FROM usuarios WHERE email='$email'";        
          $usuarios = mysqli_query($conexao,$sql);
          $usuario = mysqli_fetch_assoc($usuarios);
        }

        if(!isset($_SESSION['email'])):
      ?>
      <a href="cadastro.php" class="btn btn-dark btn-lg me-4 px-4 rounded-5" id="acesso">Cadastrar</a>
      <a href="entrar.php" class="btn btn-dark btn-lg px-4 rounded-5" id="acesso">Entrar</a>
      <?php
        endif;
      ?>
    </div>
    <div class="d-flex flex-row-reverse">
      <?php
        if(isset($_SESSION['email'])):
      ?>
      <a href="perfil.php"style="margin-right:4rem; font-size:30px" class="link-dark link-underline link-underline-opacity-0" id="navBtn"><img src="img/usuario.png" alt="" width="40" height="40"></a>
      <?php
        endif;
      ?>
      <a href="sobre.php"style="margin-right:4rem; font-size:30px" class="link-dark link-underline link-underline-opacity-0" id="navBtn">Sobre</a>
      <?php
        if(isset($_SESSION['email']) && $usuario['id_assinatura'] != null):
      ?>
      <a href="cursos.php" style="margin-right:4rem; font-size:30px" class="link-dark link-underline link-underline-opacity-0" id="navBtn">Cursos</a>
      <?php
        if($usuario['id_assinatura'] > 1 && $usuario['id_assinatura'] != null):
      ?>
      <a href="loja.php" style="margin-right:4rem; font-size:30px" class="link-dark link-underline link-underline-opacity-0" id="navBtn">Loja</a>
      <?php
        endif;
      ?>
      <?php
        endif;
      ?>
      <a href="assinaturas.php" style="margin-right:4rem; font-size:30px" class="link-dark link-underline link-underline-opacity-0" id="navBtn">Assinaturas</a>
    </div>

  </div>    

</nav>  
