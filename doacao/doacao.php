<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
      <title> Doação </title>
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
        $ongEscolhida = $_GET['ongSel']; 

        include_once "../conexao.php";
        $comandoSql = "select * from tb_ong where id_ong = '$ongEscolhida'";
        $resultado=mysqli_query($con,$comandoSql);
        $ong=mysqli_fetch_array($resultado);
      ?>      

      <div class="mx-5">      
      <h2> Doação direcionada a: <?php echo $ong['nome_ong']; ?></h2> <br>
      <form class="row g-3" action="doar.php" method="post">
        <div class="row my-2">
          <div class="col-md-2">
            <label for="comprimento" class="form-label">Comprimento do cabelo doado</label>
            <div class="input-group">
              <input type="number" min="20" max="99" step="1" class="form-control" id="comprimento" name="comprimento" onkeypress="$(this).mask('00')" value="20">
              <div class="input-group-text">centimetros</div>
            </div>  
          </div>
          <div class="col-md-2">
          <label for="tipo" class="form-label">Tipo de cabelo</label>
            <select id="tipo" class="form-select" name="tipo" required>
              <option selected value=null disabled="disabled">Escolha um tipo...</option>
              <option>Liso</option>
              <option>Ondulado</option>
              <option>Cacheado</option>
              <option>Crespo</option>
            </select>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-2">
            <label for="cor" class="form-label">Cor do cabelo</label>
            <input type="text" class="form-control" id="cor" name="cor" required>
          </div>
          <div class="col-md-2">
          <label for="forma" class="form-label">Forma de doação</label>
            <select id="forma" class="form-select" name="forma" required>
              <option selected value=null disabled="disabled">Escolha uma forma...</option>
              <option>  Correios </option>
              <option>  Entregue em ponto de coleta </option>
            </select>
          </div>
        </div>
        <?php 
          //Codiguin pra pegar o valor do dia q entrar pra cadastrar como valor padrão para evitar problemas posteriormente.
          $mes = date('m');
          $dia = date('d');
          $ano = date('Y');
          
          $hoje = $ano . '-' . $mes . '-' . $dia;
        ?>    

        <div class="row my-2">
          <div class="col-md-2">
            <label for="data" class="form-label">Data da doacao</label>
            <input class="form-control" type="date" id="data" min="2020-12-30" value="<?php echo $hoje;?>" name="data">
          </div>
        </div>

        <input type="hidden" name="ongsel" value="<?php echo $ongEscolhida;?>"></input>
        <div class="col-12">
          <button type="submit" class="btn btn-primary"> Doar </button>
        </div>
      </form>
      </div>
      </main>      
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
