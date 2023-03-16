<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
  <title>Cachos da esperança</title>
	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- Custom styles for this template -->
	<link href="css/index.css" rel="stylesheet">
</head>

<body>
<?php include_once "usuario/session_logged.php";?>

<div class="container" id="navbarcima">
    <header class="d-flex flex-wrap w-auto align-items-center justify-content-center justify-content-md-between border-bottom">
	  <img src="imagens/logo.png" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" id="logo" onclick="location.href='index.php'">	

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-8 mx-3 ink-color:#395082 fs-5 fw-semibold">INÍCIO</a></li>
        <li><a href="lista_ongs.php" class="nav-link px-8 mx-3 link-color:#395082 fs-5 fw-semibold">ONGS</a></li>
        <li><a href="como_doar.php" class="nav-link px-8 mx-3 ink-color:#395082 fs-5 fw-semibold">COMO DOAR</a></li>
      </ul>

       <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]  == True) {?>
        <div class='col-md-3 text-end'>
          <div class='dropdown'>
            <button class='btn btn-outline-primary me-2 btn-lg dropdown-toggle' type='button' data-bs-toggle='dropdown'>
              <img src="imagens/perfil.png" class="me-2">
              <?php echo "<b> " .$_SESSION["usu_logado"]["login_usuario"] ."</b>"; ?>
            </button>
            <ul class='dropdown-menu'>
              <li><a class='dropdown-item' href='usuario/perfil_usuario.php'>Perfil</a></li>
              <li><a class='dropdown-item' href='usuario/doacoes_usuario.php'>Doações</a></li>
              <li><a class='dropdown-item' href='usuario/perucas_usuario.php'>Perucas</a></li>
              <li><a class='dropdown-item' href='usuario/perfil_avancado.php'>Configurações avançadas</a></li>
              <li><a class='dropdown-item' onclick='$("#modalSair").modal("toggle")'>Sair</a></li>
            </ul>
        </div>
        </div>

        <?php } else if(isset($_SESSION["logged_ong"]) && $_SESSION["logged_ong"]  == True) {?>
        <div class='col-md-3 text-end'>
          <div class='dropdown'>
            <button class='btn btn-outline-primary me-2 btn-lg dropdown-toggle' type='button' data-bs-toggle='dropdown'>
              <img src="imagens/perfil/<?php echo $_SESSION["ong_logada"]["imagem_perfil_ong"];?>" class="me-2 imgPerfil">
              <?php echo "<b> " .$_SESSION["ong_logada"]["usuario_ong"] ."</b>"; ?>
            </button>
            <ul class='dropdown-menu'>
              <li><a class='dropdown-item' href='ong/perfil_ong.php'>Perfil</a></li>
                <li><a class='dropdown-item' href='ong/doacoes_ong.php'>Doações</a></li>
              <li><a class='dropdown-item' href='ong/perucas_ong.php'>Perucas</a></li>
              <li><a class='dropdown-item' href='ong/perfil_avancado.php'>Configurações avançadas</a></li>
              <li><a class='dropdown-item' onclick='$("#modalSair").modal("toggle")'>Sair</a></li>
            </ul>
        </div>
        </div>
       
        <?php } else { ?> 
      <div class='col-md-3 text-end'>
      <button type='button' class='btn btn-outline-primary me-2 btn-lg' onclick='$("#modalLogin").modal("toggle")'>
        Login
        </button>
        <button type='button' class='btn btn-outline-primary me-2 btn-lg' onclick='$("#modalCadastro").modal("toggle")'>
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
            <button type="button" class="btn btn-default mx-auto" onclick="location.href='usuario/frm_cadastra_usuario_1.php'">Usuário</button>
            <button type="button" class="btn btn-default mx-auto" onclick="location.href='ong/frm_cadastra_ong_1.php'">ONG</button>
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
            <button type="button" class="btn btn-default mx-auto" onclick="location.href='usuario/login_usuario.php'">Usuário</button>
            <button type="button" class="btn btn-default mx-auto" onclick="location.href='ong/login_ong.php'">ONG</button>
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
            <button type="button" class="btn btn-success mx-auto" onclick="location.href='usuario/logout.php'">Sim</button>
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
            <button type="button" class="btn btn-success mx-auto" onclick="location.href='usuario/logout.php'">Sim</button>
          </div>
        </div>
      </div>
    </div>
<main>


<div class="barzul"></div>
      <?php if(isset($_GET['submitted'])) {?>
        <div class="alert alert-success" role="alert">
          Cadastro alterado com sucesso! Entre novamente com o novo usuario
        </div>
          <script>
          $(".alert").delay(6000).slideUp(200, function() {
              $(this).alert('close');
              window.location.href = "index.php";
          });
          </script>
      <?php }?> 

      <?php if(isset($_SESSION['cadastrado'])) {
        if($_SESSION['cadastrado'] == true) {?>
        <div class="alert alert-success" role="alert">
          Cadastro realizado com sucesso! Entre na aba de login.
        </div>
          <script>
          $(".alert").delay(6000).slideUp(200, function() {
              $(this).alert('close');
          });
          </script>
      <?php $_SESSION['cadastrado'] = false; }}?> 

      <?php if(isset($_GET['excluded'])) {?>
        <div class="alert alert-warning" role="alert">
          Sua conta foi deletada!
        </div>
          <script>
          $(".alert").delay(6000).slideUp(200, function() {
              $(this).alert('close');
              window.location.href = "index.php";
          });
          </script>
      <?php }?>   
      <main>
        <div class="mx-5 my-2">
          <h1 class=""> Ongs: </h1> <br>

            <?php include_once "conexao.php"; 
              $comandoSql = "select id_ong, nome_ong, cep_ong, imagem_perfil_ong from tb_ong order by nome_ong";
              $resultado=mysqli_query($con,$comandoSql);
              while ($linha=mysqli_fetch_row($resultado)){
            ?>   

            <div class="list-group ">
              <ul class="list-group list-group-flush ongls">
                <li class="list-group-item"> 
                  <div class="row">
                    <img src="imagens/perfil/<?php echo $linha[3]?>" class="imgOng col">
                    <div class="col">
                      <h3 class="my-2"> <?php echo $linha[1]; ?></h3>
                      <div class="row">
                        <small class="text-muted"> <?php echo $linha[2]; ?>  </small>
                        <div class="col my-2 me-2 div23">
                            <button type="submit" class="btn btn-success botaoong" onclick="location.href='verperfilong.php?ongSel=<?php echo $linha[0]?>'"> Ver perfil -> </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div> 
            <br>
            <?php } ?>
        </div>
      </main>
	
	  <hr class="featurette-divider">

  
  <div class="container">
  <footer>
    <p class="text-center text-muted">Mateus Fernandez Campos, Valetine Becegato Vieira, Ricardo Scavacini Júnior.  <br> &copy; Cachos da Esperança - 2022 <br> Serelepe </p>
  </footer>
</div>

</body>

</html>