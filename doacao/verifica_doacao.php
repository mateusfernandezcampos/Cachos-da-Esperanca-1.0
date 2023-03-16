<?php 
  include_once "../conexao.php";
  session_start();
  $recebida = $_GET['recebida'];
  $doacaoEscolhida = $_GET['doacaoEscolhida'];
  $mes = date('m');
  $dia = date('d');
  $ano = date('Y');
          
  $datahj = $ano . '-' . $mes . '-' . $dia;


  if($recebida == true){
    $comandoSql = "update tb_doacao set recebida_doacao = 2, data_recebida_doacao = '$datahj' where id_doacao='$doacaoEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../ong/doacoes_ong.php?rec=true");
  } else {
    $comandoSql = "update tb_doacao set recebida_doacao = 1 where id_doacao='$doacaoEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../ong/doacoes_ong.php?nrec=true");
  }
?>