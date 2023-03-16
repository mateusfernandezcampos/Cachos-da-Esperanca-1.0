<?php 
  include_once "../conexao.php";
  session_start();
  $confirma = $_GET['confirma'];
  $perucaEscolhida = $_GET['perucaEscolhida'];
  $mes = date('m');
  $dia = date('d');
  $ano = date('Y');
          
  $datahj = $ano . '-' . $mes . '-' . $dia;


  if($confirma == true){
    $comandoSql = "update tb_peruca set status_peruca = 5, data_recebida = '$datahj' where id_peruca='$perucaEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../usuario/perucas_usuario.php");
  } else {
    $comandoSql = "update tb_peruca set status_peruca = 1 where id_peruca='$perucaEscolhida'";
    $resultado=mysqli_query($con,$comandoSql);
    header("Location: ../usuario/perucas_usuario.php?nrec=true");
  }
?>