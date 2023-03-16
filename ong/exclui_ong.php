<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
    <title>AVISO</title>
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<!-- Custom styles for this template -->
  <link href="../css/exclui.css" rel="stylesheet">
</head>

<body>

   
      <?php 
        session_start();

        $senha_cript = $_SESSION["ong_logada"]["senha_ong"];
        $sen=base64_decode($senha_cript);

        if($_POST['senver'] != $sen || $_POST['senver'] == ""){
          $_SESSION["error"]=true; ?>
          <script> window.location.href = "perfil_avancado.php"; </script>
        <?php } else { $_SESSION["error"]=false; }
      ?>     

  <div class="container"> 
     <div class="exclusao mx-auto my-auto"> 
      <h1 class="text-center h1 pt-5"> Atenção </h1>
      <br>
      <div class="mx-5 txt">
      <p> <b> Ao deletar sua conta você perde: </b> </p>
      <p> - Acesso ao site e seus sistemas; </p>
      <p> - Todos os dados cadastrados; </p>
      <p> - Todas as realizações de perucas salvas no site; </p>
      <p> - Todas as doações recebidas salvas no site; </p>
      <p> - Acesso total ao gerenciamento de perucas/doações; </p>
      <br> 
      <p class="pt-1"> <b>Tendo isso em mente, você tem  <u class="aviso"> certeza </u>  que quer deletar a conta? </b> </p>
      </div>
      <div class="text-center pt-2 pb-3">
        <button class="btn btn-outline-secondary btn-lg mx-auto" onclick="location.href='perfil_avancado.php'"> CANCELAR </button>
        <button class="btn btn-danger btn-lg mx-auto" onclick="location.href='exclusao_ong.php'"> DELETAR </button>
      </div>
    </div>

    

  </div>
</body>
</html>