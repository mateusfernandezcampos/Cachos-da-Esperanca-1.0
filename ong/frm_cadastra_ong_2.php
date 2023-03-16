<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Valentine Becegato Vieira, Ricardo Scavacini Junior, Mateus Fernandez Campos e Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Cadastro de ONG</title>

    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../js/validaUsu.js"></script>

    <!-- Custom styles for this template -->
    <link href="../css/cadastro_ong_2.css" rel="stylesheet">
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
        <form action="cadastra_ong.php" method="POST"  class="needs-validation formulario mx-auto my-auto" enctype="multipart/form-data" novalidate>
            <h1 class="h1 mb-4 fw-normal cadastrar">Cadastro:</h1>

            <div class="row mx-auto">
                <div class="form-floating has-validation col">
                    <input type="text" class="form-control" id="floatingInput" id="nome" name="nome" placeholder="nome" required>
                    <label for="floatingInput">Nome</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um nome válido. </div>
                </div> <br>

                <div class="form-floating has-validation col">
                    <input type="text" class="form-control" id="floatingInput" id="cnpj" name="cnpj" placeholder="cnpj" onkeypress="$(this).mask('000.000.000/0000-00');" required>
                    <label for="floatingInput">CNPJ</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um CNPJ válido. </div>
                </div> <br>
            </div>

            <div class="row mx-auto">
                <div class="form-floating has-validation col">
                    <input type="text" class="form-control" id="floatingInput" id="telefone" name="telefone" placeholder="telefone" onkeypress="$(this).mask('(00) 00000-0000')" required>
                    <label for="floatingInput">Telefone</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um telefone válido. </div>
                </div> <br>

                <div class="form-floating has-validation col">
                    <input type="text" class="form-control" id="floatingInput" id="cep" name="cep" placeholder="cep" onkeypress="$(this).mask('00000-000')" required> 
                    <label for="floatingInput">CEP</label>
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um cep válido. </div>
                </div> <br>
            </div>

            <br>
            <div class="mx-auto">
                <div class="form-floating form-control has-validation fun  mx-auto"> 
                    <label for="floatingInput">Fundação</label> <br><br>
                    <input class="form-control" type="date" id="fundacao" name="fundacao">
                    <div class="valid-feedback" value="Mark"></div>
                    <div class="invalid-feedback"> Por favor digite um cep válido. </div>
                </div> <br>

                <div class="form-control fun mx-auto">
                    <label for="floatingFile" class="mt-1">Imagem de perfil</label> <br><br>
                    <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar">
                </div>
            </div>

            <br> <br>
            <button class="w-100 btn btn-lg botao btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
        </form>

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