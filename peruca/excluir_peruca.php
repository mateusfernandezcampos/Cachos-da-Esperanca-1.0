<?php
  $perucaEscolhida = $_POST['idperuca'];
  include_once "../conexao.php";

  session_start();

  $comandoSql="delete from tb_peruca where id_peruca='$perucaEscolhida'";

  $resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
  	header("Location: ../usuario/perucas_usuario.php?excluido=true");
  }else{
    echo "Erro na alteração";
  }
?>