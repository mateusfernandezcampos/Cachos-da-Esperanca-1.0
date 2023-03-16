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

        $senha_cript = $_SESSION["usu_logado"]["senha_usuario"];
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
      <p> - Todos os seus dados pessoais cadastrados; </p>
      <p> - Todas as suas requisições de perucas feitas; </p>
      <p> - Todas as suas doações feitas; </p>
      <br> <br> 
      <p class="pt-5"> <b>Tendo isso em mente, você tem  <u class="aviso"> certeza </u>  que quer deletar sua conta? </b> </p>
      </div>
      <div class="text-center pt-2">
        <button class="btn btn-outline-secondary btn-lg mx-auto" onclick="location.href='perfil_avancado.php'"> CANCELAR </button>
        <button class="btn btn-danger btn-lg mx-auto" onclick="location.href='exclusao_usuario.php'"> DELETAR </button>
      </div>
    </div>
    

  </div>
</body>
</html>