<?php
  include "../conexao.php";

  session_start();
  
  $usu=$_SESSION["usu_logado"]["id_usuario"];
  $ong=$_POST["ongsel"];
  $cm=$_POST["comprimento"];
  $tipo=$_POST["tipo"];
  $cor=$_POST["cor"];
  $forma=$_POST["forma"];
  $data=$_POST["data"];
  $pen = 0; //Deixa a docação como pendente.

  $comandoSql="insert into tb_doacao
  (cod_ong,cod_usuario,cm_doacao,tipo_cabelo,cor_cabelo,forma_doacao,data_doacao,recebida_doacao) 
  values 
  ('$ong','$usu','$cm','$tipo','$cor','$forma','$data','$pen')";

  $resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
    $_SESSION["doado"]=true;
  	header("Location: ../verperfilong.php?ongSel=".$ong);
  }else{
    echo "Erro no cadastro";
  }
?>