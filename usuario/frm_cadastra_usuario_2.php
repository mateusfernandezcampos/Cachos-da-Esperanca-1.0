<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Valentine Becegato Vieira, Ricardo Scavacini Junior, Mateus Fernandez Campos e Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Cadastro de usuário</title>

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../js/validaUsu.js"></script>

    <!-- Custom styles for this template -->
    <link href="../css/cadastro.css" rel="stylesheet">
</head>

<body class="text-center">

    <?php
    session_start();
    $_SESSION["usuario"] = $_POST["usuario"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["senha"] = $_POST["senha"];
    ?>

<div class="container">
    <div class="cadastro row mx-auto my-auto ">
      <div class="form_esquerda my-auto col">
      <img src="../imagens/cachos.png" class="imglogo">
    </div>
   
    <div class="form_direita my-auto col">   
        <form action="cadastra_usuario.php" method="POST"  class="needs-validation  formulario mx-auto my-auto" novalidate>
            <h1 class="h1 mb-4 cadastrar fw-normal">Cadastro:</h1>

            <div class="form-floating  nome has-validation mx-auto">
                    <input type="text" class="form-control" id="floatingInput" id="nome" name="nome" placeholder="nome" required>
                    <label for="floatingInput">Nome</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um email válido. </div>
            </div> <br>

            <div class="row">
                <div class="form-floating  col has-validation">
                    <input type="text" class="form-control" id="floatingInput" id="cpf" name="cpf" placeholder="cpf" onkeypress="$(this).mask('000.000.000-00');" required> 
                    <label for="floatingInput">CPF</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um email válido. </div>
                </div> <br>

                <div class="form-floating  col has-validation">
                    <input type="text" class="form-control" id="floatingInput" id="rg" name="rg" placeholder="rg" onkeypress="$(this).mask('00.000.000-0');" required>
                    <label for="floatingInput">RG</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um email válido. </div>
                </div> <br>
            </div>

            <div class="row">
                 <div class="form-floating col has-validation">
                <input type="text" class="form-control" id="floatingInput" id="cep" name="cep" placeholder="cep" onkeypress="$(this).mask('00000-000')" required> 
                <label for="floatingInput">CEP</label>
                <div class="valid-feedback" value="Mark"></div>
                <div class="invalid-feedback"> Por favor digite um email válido. </div>
            </div> <br>

                <div class="form-floating col has-validation">
                    <input type="text" class="form-control" id="floatingInput" id="telefone" name="telefone" placeholder="telefone" onkeypress="$(this).mask('(00) 00000-0000')" required>
                    <label for="floatingInput">Telefone</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um email válido. </div>
                </div> <br>
            </div>

           

            <div class="radio mb-3 has-validation">
                <label for="floatingInput"> Sexo: </label>
                <input name="sexo" type="radio" value="M" required> Masculino
                <input name="sexo" type="radio" value="F" required> Feminino
                <div class="valid-feedback" value="Mark"></div>
                <div class="invalid-feedback"> Por favor digite um email válido. </div>
            </div> 

            <br>
            <button class="w-100 btn btn-lg btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
        </form>

        <br>
        <a href="../index.php"> Início </a>
    </div>

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