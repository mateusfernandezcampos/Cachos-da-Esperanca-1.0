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
	<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>


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

    <form action="login_o.php" method="POST" class="needs-validation mx-auto formulario">
      <h1 class="h3 mb-3 fw-normal logarr">Logar</h1>

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


  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="../js/script.js" type="text/javascript"> </script>
</body>

</html>