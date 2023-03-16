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
	<link href="css/como_doar.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example3">
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
      
      <div class="row mx-auto tudo">
        <div class="col-md-2 barra">
          <div id="scrollspy-collapsible" class="sticky-top">
            <ul class="nav flex-column nav-pills menu-sidebar">
              <hr class="featurette-divider mt-3">  
              <h2 class="mt-1 ms-3">Como doar</h2>
              <hr class="featurette-divider">
              <li class="nav-item mt-2">
                <a class="nav-link collapsible-scrollspy" href="#item-1">Requisitos para doar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#item-2">Cadastre-se</a>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsible-scrollspy" href="#item-3">Encontre uma ONG</a>
              </li>
            </ul>
          </div>
          </div>  
          <div class="col-md-8 scrollspy-example-collapsible barra2">
            <div data-mdb-spy="scroll" data-mdb-target="#scrollspy-collapsible" data-mdb-offset="0" class="scrollspy-example  ms-5">
                <section>
                <hr>
                    <h2 id="item-1">Requisitos</h2>
                    <h4> Esta é uma lista de requisitos e cuidados feitos para que se possa realizar a doação:</h4> <br>

                    <ul>
                      <li>
                        <p class="tud"> <text class="passo"> <b> Passo 1 - </b></text> Para realizar uma doação a mecha que irá ser doada tem de ter 20 centímetros ou mais;</p><br>
                      </li>
                      <li>
                        <p class="tud"> <text class="passo"> <b> Passo 2 - </b></text> Lave o cabelo e deixe secar naturalmente;</p><br>
                      </li>
                      <li>
                        <p class="tud"> <text class="passo"> <b> Passo 3 - </b></text> Faça um  rabo de cavalo, corte e amarre com um elástico fino;</p><br>
                      </li>
                      <li>
                        <p class="tud"> <text class="passo"> <b> Passo 4 - </b></text> Coloque a mecha em um saco plástico para melhor manueseio;</p><br>
                      </li>
                      <li>
                        <p class="tud"> <text class="passo"> <b> Passo 5 - </b></text> Envie para a ONG de sua escolha!</p><br>
                      </li>

                    
                    </ul>
                </section>
                <hr>
              </section>
              <section>
                  <h2 id="item-2">Cadastre-se</h2> <br>
                  <h5> Para acessar os sistemas de registrar um envio de doação e/ou requisitar uma peruca para uma ONG, é necessário criar uma conta. <br> 
                  <br>
                  Para criar uma conta clique no botão <button class="btn btn-primary btn-sm" disabled> Cadastre-se </button> no canto superior direito (ou clique <a href="usuario/frm_cadastra_usuario_1.php"> aqui </a>).

                  <br> 
                  <br>
                  Após criar uma conta clique no botão <button class="btn btn-primary btn-sm" disabled> Login </button> no canto superior direito (ou clique <a href="usuario/login_usuario.php"> aqui </a>) para acessar sua conta e poder utilizar dos sistemas do Cachos da Esperança!
                </h5><br>
                  
              </section>
              <hr>
              <section>
                  <h2 id="item-3">Encontre uma ONG</h2> <br>
                  <h5> Agora você pode procurar uma ONG que melhor se encaixe nos seus requisitos, ao clicar na aba <text class="ongss"> ONGS </text> no topo da tela você consegue ver todas as ONGs cadastradas no nosso site, e consegue realizar pedidos de peruca ou registrar um envio de doação para a ONG escolhida!</h5><br>
                  
              </section>
              </div>
          </div>
        </div>






</body>

</html>