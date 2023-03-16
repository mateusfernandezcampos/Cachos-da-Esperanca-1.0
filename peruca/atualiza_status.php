<?php 
  include_once "../conexao.php";
  session_start();
  $confec = $_GET['confec'];
  $enviada = $_GET['enviada'];
  $perucaEscolhida = $_GET['perucaEscolhida'];
  $mes = date('m');
  $dia = date('d');
  $ano = date('Y');
          
  $datahj = $ano . '-' . $mes . '-' . $dia;


  if($confec == true){
    $comandoSql = "update tb_peruca set status_peruca = 3 where id_peruca='$perucaEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../ong/perucas_ong.php");
  } else if($enviada == true) {
    $comandoSql = "update tb_peruca set status_peruca = 4, data_enviada = '$datahj' where id_peruca='$perucaEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../ong/perucas_ong.php");
  }
?>