<?php
    include "../conexao.php";

    session_start();
      $id = $_SESSION["ong_logada"]["id_ong"]; 
      $nom=$_POST["nome"];
      $cnp=$_POST["cnpj"];
      $tel=$_POST["telefone"];
      $cep=$_POST["cep"];
      $fun=$_POST["fundacao"];
      $email=$_POST["email"];



      $comandoSql="update  tb_ong set
    nome_ong='$nom',cnpj_ong='$cnp',fundacao_ong='$fun',cep_ong='$cep', email_ong='$email', telefone_ong='$tel'
    where id_ong='$id'"; 

    /* executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);

    /* verificando se o comando sql foi executado */
    if($resultado==true){
      $comandoSql2 = "select * from tb_ong where id_ong='$id'";

      $resultado2=mysqli_query($con,$comandoSql2);
      $ong=mysqli_fetch_array($resultado2);

      $_SESSION['ong_logada'] = $ong;
      header('Location: perfil_ong.php?submitted=successfully');
    }

