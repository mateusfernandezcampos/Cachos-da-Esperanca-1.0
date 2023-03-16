<?php
    include "../conexao.php";

    session_start();
      $id = $_SESSION["ong_logada"]["id_ong"]; 
      $usu=$_POST["usuario"];
      $sen=$_POST["senha"];

      $sen_cript = base64_encode($sen);

    $comandoSql="update tb_ong set usuario_ong='$usu',senha_ong='$sen_cript' where id_ong='$id'"; 

    /* executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);

    /* verificando se o comando sql foi executado */
    if($resultado==true){
      session_destroy();
      header('Location: ../index.php?submitted=successfully');
    }

