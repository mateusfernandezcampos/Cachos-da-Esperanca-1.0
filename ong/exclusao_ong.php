<?php
  include "../conexao.php";

  session_start();
  $id = $_SESSION["ong_logada"]["id_ong"];
 
  $comandoSqlDoa="delete from tb_doacao where cod_ong='$id'"; 
  $comandoSqlPer="delete from tb_peruca where cod_ong='$id'"; 
  $comandoSqlOng="delete from tb_ong where id_ong='$id'"; 
  
  $resultadodoa=mysqli_query($con,$comandoSqlDoa);
  $resultadoper=mysqli_query($con,$comandoSqlPer);
  $resultadoong=mysqli_query($con,$comandoSqlOng);

  if($resultadoong==true){
  	session_destroy();
    header('Location: ../index.php?excluded=successfully');
  }