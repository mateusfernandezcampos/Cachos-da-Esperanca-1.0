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

    
      <div id="myCarousel" class="carousel slide mx-auto carosel" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item"> 
            <a href="#outrosa"> <img src="imagens/outubro_rosa.jpeg" class="d-block w-100" alt="..."> </a>
          </div>

          <div class="carousel-item">
           <a href="#novazul"> <img src="imagens/novembro_azul.jpeg" class="d-block w-100 h-70" alt="..."> </a>
          </div>

          <div class="carousel-item active">
            <a href="#mama"> <img src="imagens/alvo_moda.jpeg" class="d-block w-100 h-70" alt="..." > </a>
          </div>
        </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <hr class="featurette-divider">

    <div class="row featurette mx-5">
      <div class="col-md-7 order-md-2"> <br>
        <h2 class="featurette-heading fw-normal lh-1" >Sobre<span class="text nos"> Nós</span></h2> <br>
        <p class="lead">O Cachos da Esperança é um trabalho de conclusão de curso do Ensino Técnico
          integrado ao Ensino Médio de Desenvolvimento de Sistemas, da turma 3ºDS-AB realizado por: Ricardo Scavacini Júnior, Valentine Becegato Vieira e Mateus Fernandez Campos, que tem o intuito de intermediar e facilitar o processo de doação de cabelo e requisição de perucas para ONGS que fabricam perucas para pessoas em tratamentos quimioterápicos.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="my-4 mx-1" width="560" height="350" src="imagens/cachos.png"></img>
      </div>
    </div>


    <hr class="featurette-divider" id="outrosa">      

    <!-- START THE FEATURETTES -->
    <div class="row featurette mx-5" >
      <div class="col-md-7 ">
        <h2 class="featurette-heading fw-normal lh-1"  >Outubro<span class="text rosa"> Rosa</span></h2> <br>
        <p class="lead">O outubro rosa é o movimento de conscientização para o controle do câncer de mama. A campanha foi criada em 1990 pela Fundação Susan G. Komen for the Cure e se espalhou pelo mundo.
                        O câncer de mama é um tumor maligno que ataca o tecido mamário e, segundo o Instituto Nacional do Câncer – INCA – é um dos tipos mais comuns. 
                        A identificação pode ser feita em casa ao, em momentos íntimos, a mulher examinar seus seios apalpando-os. O sintoma mais recorrente é o aparecimento de um nódulo ou massa. 
						Porém sua sensibilidade e forma tentem a variar de mulher para mulher sendo assim necessária a avaliação médica após a descoberta.</p>
      </div>
      <div class="col-md-5"> 
      <img class="my-4 ms-5" width="500" height="300" src="imagens/outubroRosa.png"></img>
    </div>
    </div>

    <hr class="featurette-divider"  id="novazul">

    <div class="row featurette mx-5">
      <div class="col-md-7 order-md-2"> <br>
        <h2 class="featurette-heading fw-normal lh-1" >Novembro<span class="text azul"> Azul</span></h2> <br>
        <p class="lead">Em 2011 o instituto lado a lado pela vida começou com campanhas para alertar sobre o câncer de próstata, que é o tipo mais comum de câncer entre os homens. A próstata é uma glândula do
         		        sistema reprodutor masculino, que se localiza abaixo da bexiga e sua principal função, juntamente com as vesículas seminais, é produzir o esperma.
                        A única maneira de tratamento é o diagnóstico precoce sendo necessário que homens em idade de risco (a partir de 45 anos) realizem, entre outros exames, o exame de próstata anualmente. </p>
      </div>
      <div class="col-md-5 order-md-1">
       <img class="my-4 mx-1" width="500" height="350" src="imagens/Novembro.png"></img>
      </div>
    </div>

    <hr class="featurette-divider" id="mama">
	
	
	<div class="row featurette mx-5">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" >Câncer de mama<span class="text azul"> No alvo da moda</span></h2> <br>
        <p class="lead">A campanha teve seu início em 1994, quando ao acompanhar a luta contra o câncer de mama de sua amiga a jornalista de moda Nina Hyde, o estilista Ralph Lauren lançou uma linha de roupas 
		                voltada para esse assunto, trazendo-o para foco. A campanha que tem como marca o alvo azul ficou mundialmente conhecida tendo levantado fundos para a fundação do Centro Nina Hyde de 
						Pesquisa do Câncer de Mama, na Universidade de Georgetown e ajudando assim a financiar pesquisas e conscientizar mulheres.</p>
      </div>
      <div class="col-md-5">
      <img class="my-4 alvo" width="300" height="300" src="imagens/Cancer.png"></img>
      </div>
    </div>
	
	  <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

  <div class="container">
  <footer>
    <p class="text-center text-muted">Mateus Fernandez Campos, Valetine Becegato Vieira, Ricardo Scavacini Júnior.  <br> &copy; Cachos da Esperança - 2022 <br> Serelepe </p>
  </footer>
</div>

</body>

</html>