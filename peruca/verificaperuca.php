<?php 
  include_once "../conexao.php";
  session_start();
  $recebida = $_GET['recebida'];
  $perucaEscolhida = $_GET['perucaEscolhida'];
  $mes = date('m');
  $dia = date('d');
  $ano = date('Y');
          
  $datahj = $ano . '-' . $mes . '-' . $dia;


  if($recebida == true){
    $comandoSql = "update tb_peruca set status_peruca = 2 where id_peruca='$perucaEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../ong/perucas_ong.php");
  } else {
    $comandoSql = "update tb_peruca set status_peruca = 1 where id_peruca='$perucaEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../ong/perucas_ong.php?nrec=true");
  }
?>