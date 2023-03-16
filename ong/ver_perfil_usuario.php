<!DOCTYPE html>
<html>
  <head>

    <?php 
      $usuEscolhido = $_GET['usuario']; 

      include_once "../conexao.php";
      $comandoSql = "select * from tb_usuario where id_usuario = '$usuEscolhido'";
      $resultado=mysqli_query($con,$comandoSql);
      $usu=mysqli_fetch_array($resultado);
    ?>
    <meta charset="utf-8">
      <title><?php echo $usu['nome_usuario']; ?></title>
      <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
      <script src="../js/bootstrap/bootstrap.min.js"></script>
      <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="../css/perfil.css" rel="stylesheet">
  </head>

  <body>
    <?php 
      include_once "session_logged.php";
    ?>
  <div class="container" id="navbarcima">
      <header class="d-flex flex-wrap w-auto align-items-center justify-content-center justify-content-md-between border-bottom">
      <img src="../imagens/logo.png" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" id="logo" onclick="location.href='../index.php'">	

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="../index.php" class="nav-link px-8 mx-3 ink-color:#395082 fs-5 fw-semibold">INÍCIO</a></li>
          <li><a href="../lista_ongs.php" class="nav-link px-8 mx-3 link-color:#395082 fs-5 fw-semibold">ONGS</a></li>
          <li><a href="../como_doar.php" class="nav-link px-8 mx-3 ink-color:#395082 fs-5 fw-semibold">COMO DOAR</a></li>
        </ul>

        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]  == True) {?>
          <div class='col-md-3 text-end'>
            <div class='dropdown'>
              <button class='btn btn-outline-primary me-2 btn-lg dropdown-toggle' type='button' data-bs-toggle='dropdown'>
                <img src="../imagens/perfil.png" class="me-2">
                <?php echo "<b> " .$_SESSION["usu_logado"]["login_usuario"] ."</b>"; ?>
              </button>
              <ul class='dropdown-menu'>
                <li><a class='dropdown-item' href='../usuario/perfil_usuario.php'>Perfil</a></li>
                <li><a class='dropdown-item' href='#'>Another action</a></li>
                <li><a class='dropdown-item' onclick='$("#modalSair").modal("toggle")'>Sair</a></li>
              </ul>
          </div>
          </div>

          <?php } else if(isset($_SESSION["logged_ong"]) && $_SESSION["logged_ong"]  == True) {?>
          <div class='col-md-3 text-end'>
            <div class='dropdown'>
              <button class='btn btn-outline-primary me-2 btn-lg dropdown-toggle' type='button' data-bs-toggle='dropdown'>
                <img src="../imagens/perfil/<?php echo $_SESSION["ong_logada"]["imagem_perfil_ong"];?>" class="me-2 imgPerfil">
                <?php echo "<b> " .$_SESSION["ong_logada"]["usuario_ong"] ."</b>"; ?>
              </button>
              <ul class='dropdown-menu'>
                <li><a class='dropdown-item' href='perfil_ong.php'>Perfil</a></li>
                <li><a class='dropdown-item' href='doacoes_ong.php'>Doações</a></li>
              <li><a class='dropdown-item' href='perucas_ong.php'>Perucas</a></li>
              <li><a class='dropdown-item' href='perfil_avancado.php'>Configurações avançadas</a></li>
                <li><a class='dropdown-item' onclick='$("#modalSair").modal("toggle")'>Sair</a></li>
              </ul>
          </div>
          </div>
        
          <?php } else { ?> 
        <div class='col-md-3 text-end'>
          <button type='button' class='btn btn-outline-primary me-2 btn-lg' onclick='$("#modalLogin").modal("toggle")'>
          <img src="../imagens/login.png" class="me-2">
          Login
          </button>
          <button type='button' class='btn btn-outline-primary me-2 btn-lg' onclick='$("#modalCadastro").modal("toggle")'>
          <img src="../imagens/register.png" class="me-2">
          Cadastre-se
          </button>
          </div>
          <?php } ?>

      </header>
      </div>
    
    
      <!-- Modal para escolher o cadastro -->    
      <div class="modal fade" id="modalCadastro" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-body mx-auto">
              Escolha Usuário ou ONG
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='../usuario/frm_cadastra_usuario_1.php'">Usuário</button>
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='frm_cadastra_ong_1.php'">ONG</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal para escolher o cadastro -->    
      <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-body mx-auto">
              Escolha Usuário ou ONG
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='../usuario/login_usuario.php'">Usuário</button>
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='login_ong.php'">ONG</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal para confirmar o logout -->
      <div class="modal fade" id="modalSair" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-body mx-auto">
              Deseja realmente sair?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal"">Não</button>
              <button type="button" class="btn btn-success mx-auto" onclick="location.href='logout.php'">Sim</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal para confirmar o logout de ong -->
      <div class="modal fade" id="modalSair" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">
            <div class="modal-body mx-auto">
              Deseja realmente sair?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger mx-auto" data-bs-dismiss="modal"">Não</button>
              <button type="button" class="btn btn-success mx-auto" onclick="location.href='logout.php'">Sim</button>
            </div>
          </div>
        </div>
      </div>
      <main>
      <div class="barzul"></div>    <br>

        <div class="col-md-6 mx-5">
          <h2>Perfil: </h2>
        </div>
        <br>

        <div class="row g-3 mx-5">

        <div class="md-5">  
      <hr>
        </div>

        <div class="col-md-2">
          <label for="inputEmail4" class="form-label"><b>Nome:</b></label>
          <p> <?php echo $usu["nome_usuario"];?> </p>
        </div>
        <div class="col-md-2">
          <label for="inputAddress" class="form-label"><b>RG:</b></label>
          <p> <?php echo $usu["rg_usuario"];?> </p>
        </div>
        <div class="col-1">
          <label for="inputCity" class="form-label"><b>CPF:</b></label>
          <p> <?php echo $usu["cpf_usuario"];?> </p>
        </div>
        </div>      
        <div class="row g-3 mx-5 pt-2">
        <div class="col-md-2">
          <label for="inputAddress2" class="form-label"><b>Email:</b></label>
          <p> <?php echo $usu["email_usuario"];?> </p>
        </div>
        <div class="col-md-2">
          <label for="inputAddress2" class="form-label"><b>Telefone:</b></label>
          <p> <?php echo $usu["telefone_usuario"];?> </p>
        </div>
        <div class="col-md-2">
          <label for="inputAddress2" class="form-label">CEP:</label>
          <p> <?php echo $usu["cep_usuario"];?> </p>
        </div>
        </div>
        <div class="row g-3 mx-5 pt-5">

        <div class="md-5">  
      <hr>
        </div>

        <div class="my-2">
          <button class="btn btn-primary btn-lg" onclick="location.href='../ong/perfil_ong.php'"> Voltar </button>
        </div>

      <div class="fixed-bottom">  
        <hr class="featurette-divider">
          <div class="container">
            <footer>
              <p class="text-center text-muted">Mateus Fernandez Campos, Valetine Becegato Vieira, Ricardo Scavacini Júnior.  <br> &copy; Cachos da Esperança - 2022 <br> Serelepe </p>
            </footer>
          </div>
      </div>

  </body>
</html>      