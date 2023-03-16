<?php
    include "../conexao.php";

    session_start();
      $id = $_SESSION["ong_logada"]["id_ong"]; 

      $imagem = time() . "_" . $_FILES['avatar']['name'];
      $destino = '../imagens/perfil/' . $imagem;
      move_uploaded_file($_FILES['avatar']['tmp_name'],$destino);



      $comandoSql="update tb_ong set imagem_perfil_ong='$imagem' where id_ong='$id'"; 

    /* executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);

    /* verificando se o comando sql foi executado */
    if($resultado==true){
      $comandoSql2 = "select * from tb_ong where id_ong='$id'";

      $resultado2=mysqli_query($con,$comandoSql2);
      $ong=mysqli_fetch_array($resultado2);

      $_SESSION['ong_logada'] = $ong;
      header('Location: perfil_ong.php?imgsub=successfully');
    }

