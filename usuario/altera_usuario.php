<?php
    include "../conexao.php";

    session_start();
      $id = $_SESSION["usu_logado"]["id_usuario"]; 
      $nom=$_POST["nome"];
      $rg=$_POST["rg"];
      $cpf=$_POST["cpf"];
      $email=$_POST["email"];
      $tel=$_POST["telefone"];
      $cep=$_POST["cep"];
      $sex=$_POST["sexo"];


    $comandoSql="update  tb_usuario set
  nome_usuario='$nom',rg_usuario='$rg',cpf_usuario='$cpf',cep_usuario='$cep', email_usuario='$email', telefone_usuario='$tel', sexo_usuario='$sex'
  where id_usuario='$id'"; 

    /* executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);

    /* verificando se o comando sql foi executado */
    if($resultado==true){
      $comandoSql2 = "select * from tb_usuario where id_usuario='$id'";

      $resultado2=mysqli_query($con,$comandoSql2);
      $usuario=mysqli_fetch_array($resultado2);

      $_SESSION['usu_logado'] = $usuario;
      header('Location: perfil_usuario.php?submitted=successfully');
    }

