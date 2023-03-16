<?php
  include "../conexao.php";

  session_start();
  $id = $_SESSION["usu_logado"]["id_usuario"];
 
  $comandoSqlDoa="delete from tb_doacao where cod_usuario='$id'"; 
  $comandoSqlPer="delete from tb_peruca where cod_usuario='$id'"; 
  $comandoSqlUsu="delete from tb_usuario where id_usuario='$id'"; 
  
  $resultadodoa=mysqli_query($con,$comandoSqlDoa);
  $resultadoper=mysqli_query($con,$comandoSqlPer);
  $resultadousu=mysqli_query($con,$comandoSqlUsu);

  if($resultadousu==true){
  	session_destroy();
    header('Location: ../index.php?excluded=successfully');
  }