<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
      <title> Alteração da requisição</title>
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
      include_once "../usuario/session_logged.php";
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
              <li><a class='dropdown-item' href='../usuario/doacoes_usuario.php'>Doações</a></li>
              <li><a class='dropdown-item' href='../usuario/perucas_usuario.php'>Perucas</a></li>
              <li><a class='dropdown-item' href='../usuario/perfil_avancado.php'>Configurações avançadas</a></li>
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
                <li><a class='dropdown-item' href='../ong/perfil_ong.php'>Perfil</a></li>
                <li><a class='dropdown-item' href='#'>Another action</a></li>
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
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='../ong/frm_cadastra_ong_1.php'">ONG</button>
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
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='../ong/login_ong.php'">ONG</button>
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
              <button type="button" class="btn btn-success mx-auto" onclick="location.href='../usuario/logout.php'">Sim</button>
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
              <button type="button" class="btn btn-success mx-auto" onclick="location.href='../usuario/logout.php'">Sim</button>
            </div>
          </div>
        </div>
      </div>
      <main>
      <div class="barzul"></div>    <br>

      <?php 
        $perucaEscolhida = $_GET['perucaEscolhida'];
        include_once "../conexao.php";
        $comandoSql = "select * from tb_peruca where id_peruca = '$perucaEscolhida'";
        $resultado=mysqli_query($con,$comandoSql);
        $peruca=mysqli_fetch_array($resultado);

        $idong = $peruca['cod_ong'];
        $comandoSqlOng = "select * from tb_ong where id_ong = '$idong'";
        $resultado2=mysqli_query($con,$comandoSqlOng);
        $ong=mysqli_fetch_array($resultado2);
      ?>      

      <div class="mx-5">      
      <h2> Requisição de peruca para: <?php echo $ong['nome_ong']; ?></h2> <br>
      <form class="row g-3" action="alterar.php" method="post" enctype="multipart/form-data">
        <div class="row my-4">
          <div class="col-md-4">
            <label for="descricao" class="form-label">Descrição da peruca:</label>
            <textarea class="form-control descricao1" name="descricao"><?php echo $peruca['descricao_peruca']; ?></textarea>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-4">
            <label for="hospital" class="form-label">Hospital onde está realizando o tratamento:</label>
            <input type="text" class="form-control" id="hospital" name="hospital" value="<?=$peruca['hospital_peruca']?>" required>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-4">
            <label for="" class="form-label">Laudo médico:</label>
            <input type="file" accept="image/*" class="form-control" id="laudo" name="laudo">
          </div>
        </div>

        <input type="hidden" name="idperuca" value="<?=$peruca['id_peruca']?>"></input>

        <div class="col-12">
          <button type="submit" class="btn btn-warning"> Alterar </button>
        </div>
      </form>
      </div>
      </main>      
      <div class="">  
        <hr class="featurette-divider">
          <div class="container">
            <footer>
              <p class="text-center text-muted">Mateus Fernandez Campos, Valetine Becegato Vieira, Ricardo Scavacini Júnior.  <br> &copy; Cachos da Esperança - 2022 <br> Serelepe </p>
            </footer>
          </div>
      </div>

  </body>
</html>      
