<?php
    include "../conexao.php";

    session_start();
      $id = $_SESSION["usu_logado"]["id_usuario"]; 
      $usu=$_POST["usuario"];
      $sen=$_POST["senha"];

      $sen_cript = base64_encode($sen);



    $comandoSql="update tb_usuario set login_usuario='$usu',senha_usuario='$sen_cript' where id_usuario='$id'"; 

    /* executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);

    /* verificando se o comando sql foi executado */
    if($resultado==true){
      session_destroy();
      header('Location: ../index.php?submitted=successfully');
    }

