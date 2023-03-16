<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <title>Perucas</title>
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
<?php include_once "session_logged.php";?>

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
              <li><a class='dropdown-item' href='perfil_usuario.php'>Perfil</a></li>
              <li><a class='dropdown-item' href='doacoes_usuario.php'>Doações</a></li>
              <li><a class='dropdown-item' href='perucas_usuario.php'>Perucas</a></li>
              <li><a class='dropdown-item' href='perfil_avancado.php'>Configurações avançadas</a></li>
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
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='frm_cadastra_usuario_1.php'">Usuário</button>
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
              <button type="button" class="btn btn-default mx-auto" onclick="location.href='login_usuario.php'">Usuário</button>
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

    <div class="barzul"></div>    
    
          <?php 
             $sexo = $_SESSION["usu_logado"]["sexo_usuario"]; 

            if($sexo == "M"){
              $sexo = "Masculino";
             } else{
              $sexo = "Feminino";
            }
          ?>

      <ul class="nav nav-tabs nav-pills mx-5">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="perfil_usuario.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doacoes_usuario.php">Doações</a>
        </li>
        <li class="nav-item  active">
          <a class="nav-link" href="perucas_usuario.php" aria-current="page">Perucas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil_avancado.php">Configurações avançadas</a>
        </li>
      </ul>     
      <br>

      <div class="col-md-6 mx-5">
        <h2>Perucas: </h2>
      </div>
      <br>

      <div class="mx-5 my-2">

      <?php 
            if(isset($_GET["alterado"])) {  ?>
              <div class="alert alert-success" role="alert">
                Pedido de peruca alterado com sucesso!
              </div>
                <script>
                $(".alert").delay(6000).slideUp(200, function() {
                    $(this).alert('close');
                    window.location.href = "perucas_usuario.php";
                });
                </script>
            <?php } ?>

            <?php 
            if(isset($_GET["excluido"])) {  ?>
              <div class="alert alert-danger" role="alert">
                Excluido!
              </div>
                <script>
                $(".alert").delay(6000).slideUp(200, function() {
                    $(this).alert('close');
                    window.location.href = "perucas_usuario.php";
                });
                </script>
            <?php } ?>

            <?php include_once "../conexao.php"; 
              $idusu = $_SESSION["usu_logado"]["id_usuario"];
              $comandoSql = "select * from tb_peruca where cod_usuario='$idusu'";
              $resultado=mysqli_query($con,$comandoSql);
              while ($linha=mysqli_fetch_row($resultado)){
                //Comando para pegar o nome da ong via chave estrangeira da ong
                $comandoSqlNome = "select nome_ong from tb_ong where id_ong='$linha[2]'";
                $resul=mysqli_query($con,$comandoSqlNome);
                $nomeong=mysqli_fetch_assoc($resul);
                ?>   
    
                <div class="list-group ">
                  <ul class="list-group list-group-flush ongls">
                    <li class="list-group-item"> 
                      <div class="row">
                        <div class="col">
                          <h4 class="my-2"> Pedido de peruca realizado para <?php echo $nomeong["nome_ong"]; ?></h4>
                          <div class="row">
                            <small class="text-muted"> <b>Data:</b> <?php echo date("d/m/Y", strtotime($linha[6])); ?>  </small>
                            <small class="text-muted"> <b>Descrição do pedido:</b> <?php echo $linha[9]; ?>cm</small>
                            <small class="text-muted"> <b>Hospital de tratamento:</b> <?php echo $linha[5]; ?>  </small>
                            <small class="text-muted"> <button type='button' class='btn btn-outline-secondary me-2 btn-sm' onclick='$("#modalLaudo").modal("toggle")'> Laudo </button> </small>
                            <br><br>
                            <!-- If e elses para mudar o status dependendo do status(obviamente) meio feio esse monte de código mas é oq temos para hoje-->
                            <?php if($linha[3] == 2) {?>
                              <small class="text-muted"> <b>Status:</b> <a class="text-warning"> <b> Pedido recebido </b> </a> </small>
                              <div class="row my-2">
                                <div class="progress mx-2" style="height: 10px;padding-left: 0px;padding-right: 0px;">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            <?php }else if($linha[3] == 1){ ?>
                              <small class="text-muted"> <b>Status:</b> <a class="text-danger"> <b> Pedido negado pela  <?php echo $nomeong["nome_ong"]; ?> </b> </a> </small>
                               <!-- Modal para excluir a doacao -->
                               <div class="modal fade" id="modalExcPeruca" role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-body mx-auto">
                                      Deseja realmente excluir?
                                    </div>
                                    <div class="modal-footer mx-auto">
                                      <form action="../peruca/excluir_peruca.php" method="post">
                                        <input type="hidden" name="idperuca" value="<?=$linha[0]?>">
                                        <button type="button" class="btn btn-outline-secondary mx-auto" data-bs-dismiss="modal"">Cancelar</button>
                                        <button type="submit" class="btn btn-danger mx-auto">Excluir</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <br> <br> <small class="text-muted"> <button type='button' class='btn btn-danger me-2 btn-sm' onclick='$("#modalExcPeruca").modal("toggle")'> X Excluir </button> </small>
                            <?php }else if($linha[3] == 0){ ?>
                              <small class="text-muted"> <b>Status:</b> <a class="text-black-50"> <b> Pendente </b> </a> </small>
                              <br> <small class="text-muted my-3"> <button type='button' class='btn btn-warning me-2 btn-sm' onclick="location.href='../peruca/altera_peruca.php?perucaEscolhida=<?php echo $linha[0];?>'"> Alterar peruca </button> </small>
                            <?php }else if($linha[3] == 3){ ?>
                              <small class="text-muted"> <b>Status:</b> <a class="text-warning"> <b> Sendo confeccionada </b> </a> </small>
                                  <div class="row my-2">
                                    <div class="progress mx-2" style="height: 10px;padding-left: 0px;padding-right: 0px;">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 66%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                            <?php }else if($linha[3] == 4){ ?>
                              <small class="text-muted"> <b>Status:</b> <a class="text-warning"> <b> Enviada </b> </a> </small>
                              <div class="row my-2">
                                    <div class="progress mx-2" style="height: 10px;padding-left: 0px;padding-right: 0px;">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                <small class="text-muted"> Data do envio da peruca: <?php echo date("d/m/Y", strtotime($linha[7]));?> </small>
                              <br> <small class="text-muted"> <button type='button' class='btn btn-success me-2 btn-sm' onclick="location.href='../peruca/confirmarperuca.php?confirma=true&perucaEscolhida=<?php echo $linha[0];?>'"> Recebi minha peruca </button> </small>
                            <?php }else if($linha[3] == 5){ ?>
                              <small class="text-muted"> Status: <a class="text-success"> <b> Peruca recebida </b> </a> </small>
                                <div class="row my-2">
                                    <div class="progress mx-2" style="height: 10px;padding-left: 0px;padding-right: 0px;">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                              <small class="text-muted"> Data do recebimento da peruca: <?php echo date("d/m/Y", strtotime($linha[8]));?> </small>
                            <?php } ?> 
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div> 
                <br>

                <!-- Modal para mostrar a imagem do laudo -->
                <div class="modal fade" id="modalLaudo" role="dialog">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header mx-auto">
                        Laudo Médico:
                      </div>
                      <div class="modal-body mx-auto">
                        <img src="../imagens/laudos/<?php echo $linha[4]?>">
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
            </div>
      




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