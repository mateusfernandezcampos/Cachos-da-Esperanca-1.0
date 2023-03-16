<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Valentine Becegato Vieira, Ricardo Scavacini Junior, Mateus Fernandez Campos e Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Login</title>

  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script src="../js/bootstrap/bootstrap.min.js"></script>
	<script src="../js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="../css/login.css" rel="stylesheet">
</head>

<body class="text-center">

<div class="container">
    <div class="cadastro row mx-auto my-auto ">
      <div class="form_esquerda my-auto col">
        <img src="../imagens/cachos.png" class="imglogo">
      </div>

     <div class="form_direita my-auto col">   
    <form action="login.php" method="POST" class="needs-validation formulario mx-auto">
      <h1 class="mb-3 fw-normal logar">Logar</h1>

      <div class="form-floating has-validation">
        <input type="usuario" class="form-control my-3" id="usuario" name="usuario" placeholder="usuario" required>
        <label for="floatingInput">Usuário</label>
      </div>

      <div class="form-floating has-validation">
        <input type="password" class="form-control mb-3" id="senha" name="senha" placeholder="senha" required>
        <label for="senha">Senha</label>
      </div>

      
      <button class="w-100 btn btn-lg btn-primary mt-5" type="submit" id="btnLogar">Logar</button>
    </form>
    <br>
    <?php 
      session_start();
      if(isset($_SESSION['error'])){
        if($_SESSION['error'] == true) {?>
        <div class="alert alert-danger" role="alert">
          Usuário e/ou senha incorreta(s)!
        </div>
          <script>
          $(".alert").delay(3000).slideUp(200, function() {
              $(this).alert('close');
          });
          </script>
        
    <?php $_SESSION['error'] = false; } }?>

    <br><br>
    <a href="../index.php"> Início </a>


  </div></div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/script.js" type="text/javascript"> </script>
</body>

</html>