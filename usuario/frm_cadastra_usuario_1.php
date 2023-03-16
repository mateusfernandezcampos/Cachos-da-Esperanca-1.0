<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Valentine Becegato Vieira, Ricardo Scavacini Junior, Mateus Fernandez Campos e Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Cadastro de usuário</title>

  <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
  <script src="../js/bootstrap/bootstrap.min.js"></script>
  <script src="../js/validacaoCadastro.js" type="text/javascript"></script>
  
  <!-- Custom styles for this template -->
  <link href="../css/cadastro.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="container">
    <div class="cadastro row mx-auto my-auto ">
      <div class="form_esquerda my-auto col">
      <img src="../imagens/cachos.png" class="imglogo">
    </div>

    <div class="form_direita my-auto col">   
        <form action="frm_cadastra_usuario_2.php" method="POST" class="needs-validation formulario mx-auto my-auto" novalidate>
          <h1 class="h1 mb-4 cadastrar fw-normal">Cadastro</h1>

          <div class="form-floating has-validation">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <label for="email">Email</label>
            <div class="valid-feedback" value="Mark"></div>
            <div class="invalid-feedback"> Por favor digite um email válido. </div>
          </div> <br>

          <div class="form-floating has-validation">
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" required>
            <label for="usuario">Usuário</label>
            <div class="valid-feedback" value="Mark"></div>
            <div class="invalid-feedback"> Por favor digite um usuário válido.</div>
          </div> <br>

          <div class="form-floating has-validation">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="password" maxlength="12" required>
            <label for="senha">Senha</label>
            <div class="valid-feedback" value="Mark"></div>
            <div class="invalid-feedback"> Por favor digite uma senha válida.</div>
          </div> <br>

          

          <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
        </form>

        <br><br>
        <a href="../index.php"> Início </a>
      </div>
  </div>  
  </main>

  <script> 
    (function () {
      var senha = document.getElementById("senha");
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
  </script>

</body>

</html>