<?php
  include "../conexao.php";

  session_start();
  
  $id=$_POST["id"];
  $cm=$_POST["comprimento"];
  $tipo=$_POST["tipo"];
  $cor=$_POST["cor"];
  $forma=$_POST["forma"];
  $data=$_POST["data"];
  $pen = 0; //Deixa a docação como pendente.

  $comandoSql="update tb_doacao set
  cm_doacao = '$cm',tipo_cabelo = '$tipo',cor_cabelo = '$cor',forma_doacao = '$forma',data_doacao = '$data',recebida_doacao = '$pen'
  where id_doacao='$id'";

  $resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
  	header("Location: ../usuario/doacoes_usuario.php?alterado=true");
  }else{
    echo "Erro na alteração";
  }
?>